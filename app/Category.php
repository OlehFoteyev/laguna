<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'short_description',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
