<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "name",
        "parent_id",
    ];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
