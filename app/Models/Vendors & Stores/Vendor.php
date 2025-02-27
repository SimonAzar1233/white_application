<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        "user_id",
        "company_name",
        "status",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}
