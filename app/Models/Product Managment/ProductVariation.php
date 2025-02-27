<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    protected $fillable = [
        "product_id",
        "variation_option_id",
        "additional_price",
        "stock",
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    public function variationOptions()
    {

        return $this->belongsTo(VariationOption::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
