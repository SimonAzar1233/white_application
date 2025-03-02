<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "store_id",
        "name",
        "price",
        "descrption",
        "stock",
        "status",
    ];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function store()
    {
        return $this->belongsTo(Store::class,);
    }

    public function cartItem()
    {
        return $this->hasOne(CartItem::class,);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class,);
    }

    public function productVariations()
    {
        return $this->hasMany(ProductVariation::class, 'product_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'product_id');
    }
}
