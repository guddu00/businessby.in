<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Ensure 'name' is fillable

    // Relationship with Business
    public function businesses()
    {
        return $this->hasMany(Business::class, 'business_category', 'id');
    }
}
