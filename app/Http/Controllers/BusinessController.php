<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Business;
use App\Models\Financial;
use App\Models\AdditionalInfo;
use App\Models\Photograph;
use App\Models\BusinessCategory;


class BusinessController extends Controller
{
    public function step1()
    {
        $categories = BusinessCategory::all(); 
        return view('pages.listbusiness', compact('categories'));
    }
    
    public function storeStep1(Request $request)
{
    $request->validate([
        'business_name' => 'required',
        'business_website' => 'nullable|url',
        'bank' => 'required',
        'city' => 'required',
        'business_category' => 'required|exists:business_categories,id',
        'year_established' => 'required|integer',
        'entity_type' => 'required',
        'operational_status' => 'required',
        'num_employees' => 'required|integer',
    ]);

    $businessData = $request->all();
    $businessData['business_category_id'] = $businessData['business_category']; // Map correctly
    unset($businessData['business_category']); // Remove old key

    Session::put('business_data', $businessData);
    Session::save();

  
    return redirect('/business-heighlights')->with('success', 'Step 1 completed');
}


    public function step2()
    {
        // Ensure session data is available
        if (!Session::has('business_data')) {
            return redirect('/')->with('error', 'Session expired! Please start again.');
        }

        return view('pages.business-heighlights');
    }

    public function storeStep2(Request $request)
    {
        $request->validate([
            'products' => 'required|string|max:255',
            'premises' => 'required|in:Owned,Leased,Not applicable',
            'other_premises' => 'nullable|string',
            'clientele' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

       
        Session::put('additional_data', $request->all());
        Session::save();
       
        
        return redirect('/financial-information')->with('success', 'Step 2 completed');
    }

    public function step3()
    {
        if (!Session::has('business_data')) {
            return redirect('/')->with('error', 'Session expired! Please start again.');
        }

        return view('pages.financial-information');
    }

    public function storeStep3(Request $request)
    {
       
        $request->validate([
            'turnover' => 'required|integer',
            'ebitda' => 'required|numeric',
            'transaction_type' => 'required',
            'deal_size' => 'required|integer',
            'deal_inclusions' => 'required',
            'deal_rationale' => 'required',
            'deal_title' => 'required',
        ]);
       
        $businessData = Session::get('business_data');
        $financialData = $request->all();
        $additionalData = Session::get('additional_data');

        
        $business = Business::create($businessData);
        $financialData['business_id'] = $business->id;
        Financial::create($financialData);
        $additionalData['business_id'] = $business->id;
        AdditionalInfo::create($additionalData);
        Session::put('business_id', $business->id);
        Session::save();


        Session::forget(['business_data', 'additional_data']);
        
        return redirect('/business-photograph')->with('success', 'Business data saved successfully');
    }

    public function step4()
    {
        if (!Session::has('business_id')) {
            return redirect('/')->with('error', 'Session expired! Please start again.');
        }

        return view('pages.business-photograph');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_documents.*' => 'mimes:pdf,doc,docx,jpeg,png|max:5000',
            'financial_documents.*' => 'mimes:pdf,doc,docx,jpeg,png|max:5000',
            'license_documents.*' => 'mimes:pdf,doc,docx,jpeg,png|max:5000',
        ]);

        $business_id = Session::get('business_id');

        if (!$business_id) {
            return back()->with('error', 'Business ID is missing. Please complete previous steps.');
        }

        $uploadedData = [];

        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/uploads/photos', $filename);
                $uploadedData['images'][] = $filename;
            }
        }

        foreach (['company_documents', 'financial_documents', 'license_documents'] as $docType) {
            if ($request->hasFile($docType)) {
                foreach ($request->file($docType) as $document) {
                    $filename = time() . '_' . $document->getClientOriginalName();
                    $document->storeAs("public/uploads/{$docType}", $filename);
                    $uploadedData[$docType][] = $filename;
                }
            }
        }

        Photograph::create([
            'business_id' => $business_id,
            'images' => json_encode($uploadedData['images'] ?? []),
            'company_documents' => json_encode($uploadedData['company_documents'] ?? []),
            'financial_documents' => json_encode($uploadedData['financial_documents'] ?? []),
            'license_documents' => json_encode($uploadedData['license_documents'] ?? []),
        ]);

        return back()->with('success', 'Files uploaded successfully!');
    }

    public function showBusinessData()
    {
        $businessData = Business::with(['financial', 'additionalInfo', 'photograph'])->get();
        return view('admin.adminbusinessdata', compact('businessData'));
    }

  

    
}
