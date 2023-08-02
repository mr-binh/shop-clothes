<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'attribute';
    protected $fillable = [
        'attribute_name',
        'attribute_type',
        'attribute_value',
        'status',
    ];
}
