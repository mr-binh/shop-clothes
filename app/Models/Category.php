<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'category';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'parent_id',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
