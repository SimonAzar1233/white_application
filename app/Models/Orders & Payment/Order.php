<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "user_id",
        "store_id",
        "status",
        "total_price",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function shippingMethod()
    {

        return $this->hasOne(ShippingMethod::class);
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
