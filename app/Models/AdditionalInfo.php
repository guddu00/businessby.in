<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalInfo extends Model
{
    use HasFactory;
    protected $table = 'additional_info';
    protected $fillable = [
        'business_id',
        'products',
        'premises',
        'other_premises',
        'clientele',
        'details'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
