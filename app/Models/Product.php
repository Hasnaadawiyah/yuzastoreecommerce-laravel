<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'sku',
        'barcode',
        'price',
        'stock',
        'is_active',
        'image',
    ];

    /**
     * Relasi ke kategori.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi ke varian produk.
     */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}