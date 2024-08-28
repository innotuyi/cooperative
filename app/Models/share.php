<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class share extends Model
{
    use HasFactory;

    protected $fillable = [
        'memberID',
        'amount',
        'joining_date',
        'amount_increase',
        'interest_rate',
        'total_share'

    ];
}
