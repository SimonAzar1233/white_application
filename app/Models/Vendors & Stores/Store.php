<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        "vendor_id",
        "name",
        "address",
        "status",
    ];

    public function vendor()
    {

        return $this->belongsTo(Vendor::class);
    }

    public function prodcuts()
    {
        return $this->hasMany(Product::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
