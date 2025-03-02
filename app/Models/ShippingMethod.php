<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    protected $fillable = [
        "name",
        "price",
        "estimated_time",
    ];

    public function order()
    {

        return $this->belongsTo(Order::class);
    }
}
