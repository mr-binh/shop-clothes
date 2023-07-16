<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'order_code',
        'user_id',
        'name',
        'phone',
        'email',
        'note',
        'total',
        'status',
        'payment_method',
        'payment_status',
        'shipping_address',
    ];
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}