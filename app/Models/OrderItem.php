<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{ 
    protected $fillable = [
        'order_id', 'product_id', 'product_variant_id',
        'product_name', 'price', 'quantity'
    ];
    
    /**
     * Get the order that owns the item.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    /**
     * Get the product associated with the order item.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    /**
     * Get the variant associated with the order item.
     */
    public function variant()
    {
        return $this->belongsTo(ProductVariant::class,'product_variant_id');
    }
}