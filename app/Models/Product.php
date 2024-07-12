<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_weight',
        'product_description',
        'price',
        'stock',
    ];

    // Relationship with ProductCategory
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    // Relationship with OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
