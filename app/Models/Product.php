<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use App\Models\ProductVariant;
//use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price',
        'status',
        'hot',
        'sold',
        'category_id',
    ];
    public function product_variants()
    {
        return $this->hasMany(ProductVariants::class, 'product_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
