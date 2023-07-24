<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariants extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'product_variants';
    protected $fillable = [
        'product_id',
        'size',
        'color',
        'quantity',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class, 'product_variant_id', 'id');
    }
    public function getProductQuantityAttribute()
    {
        return $this->sum('quantity');
    }

}
