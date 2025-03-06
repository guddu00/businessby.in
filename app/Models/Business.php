<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name', 
        'business_website', 
        'bank', 
        'city', 
        'business_category', 
        'sale_type', 
        'year_established', 
        'entity_type', 
        'operational_status', 
        'num_employees'
    ];

    

    public function category()
    {
        return $this->belongsTo(BusinessCategory::class, 'business_category');
    }

    public function financial()
    {
        return $this->hasOne(Financial::class);
    }

    public function additionalInfo()
    {
        return $this->hasOne(AdditionalInfo::class);
    }
    public function photograph()
    {
        return $this->hasOne(Photograph::class, 'business_id', 'id');
    }


}
