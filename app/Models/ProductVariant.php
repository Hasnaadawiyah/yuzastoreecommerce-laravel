<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'name', 'slug', 'description',
        'sku', 'barcode', 'price', 'stock', 'is_active'
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
       return $this->belongsTo(Category::class); 
    }

    /**
     *  Get the variants for the product (sizes, colors, etc).
     */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}