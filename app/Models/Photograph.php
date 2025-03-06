<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photograph extends Model
{
    use HasFactory;

    protected $table = 'photographs';

    protected $fillable = [
        'business_id',
        'images',
        'company_documents',
        'financial_documents',
        'license_documents'
    ];

    protected $casts = [
        'images' => 'array',
        'company_documents' => 'array',
        'financial_documents' => 'array',
        'license_documents' => 'array'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
