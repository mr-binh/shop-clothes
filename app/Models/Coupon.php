<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table='coupon';
    protected $fillable=[
        'code',
        'type',
        'value',
        'discount_max',
        'quantity',
        'used',
        'start_date',
        'end_date',
        'status'
    ];
}
