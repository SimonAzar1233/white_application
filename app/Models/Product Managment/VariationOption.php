<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariationOption extends Model
{
    protected $fillable = [
        "name",
        "type",
    ];

    public function productVariations()
    {

        return $this->hasMany(ProductVariation::class);
    }
}
