<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $fillable = [
        'title',
        'description',
        'title_img',
        'price',
        'category_id',
    ];

    public function scopeSearch($query,$s)
    {
        return $query->where('title','like','%' .$s. '%')
            ->orWhere('description','like','%' .$s. '%');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
