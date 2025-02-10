<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'mini_description',
        'description',
        'price',
        'sale_price',
        'sku',
        'stock',
        'featured',
        'status', // draft, published, out_of_stock
        'meta_title',
        'meta_description',
        'weight',
        'dimensions',
        'tax_class'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2', 'max_price',
        'featured' => 'boolean',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function addToWishlist($product_id)
    {
        $wishlist = new Wishlist();
        $wishlist->product_id = $product_id;
        $wishlist->user_id = auth()->user()->id;
        $wishlist->save();

        return $wishlist;
    }
}
