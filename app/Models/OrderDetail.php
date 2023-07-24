<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'order_detail';
    protected $fillable = [
        'order_id',
        'product_variant_id',
        'quantity',
        'price',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    public function product_variant()
    {
        return $this->belongsTo(ProductVariants::class, 'product_variant_id', 'id');
    }
}
