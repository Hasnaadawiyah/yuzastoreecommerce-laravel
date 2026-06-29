<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'user_id', 'invoice_number', 'total_amount',
        'status', 'shipping_address', 'phone'
    ];
    
    /**
     * * Get the user that owns the order.
     * */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * * Get the items for the order.
     * */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    
    /**
     * * Get the payment associated with the order.
     * */
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}