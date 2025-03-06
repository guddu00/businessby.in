<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id', 'turnover', 'ebitda', 'transaction_type',
        'deal_size', 'deal_inclusions', 'deal_rationale', 'deal_title'
    ];

    public function business() {
        return $this->belongsTo(Business::class);
    }
}
