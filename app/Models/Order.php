<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'status',
        'payment_status',
        'payment_method',
        'shipping_method',
        'shipping_cost',
        'tax',
        'discount',
        'notes',
        'shipping_address',
        'billing_address',
        'card_details'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function address()
    {
        return $this->hasOne(UserAddress::class);
    }

    public function getStatusColorClass()
    {
        return match($this->status) {
            'pending' => 'text-warning',
            'confirmed' => 'text-info',
            'processing' => 'text-primary',
            'shipped' => 'text-info',
            'delivered' => 'text-success',
            'cancelled' => 'text-danger',
            'returned' => 'text-secondary',
            default => 'text-dark'
        };
    }

    public function getStatusIcon($status)
    {
        return match($status) {
            'pending' => 'fa-cart-arrow-down',            // or 'fa-clock-o' for older FA versions
            'confirmed' => 'fa-check-circle',
            'processing' => 'fa-cog',           // or 'fa-gear'
            'shipped' => 'fa-truck',
            'delivered' => 'fa-check',
            'cancelled' => 'fa-times',          // or 'fa-xmark' in newer versions
            'returned' => 'fa-rotate-left',     // or 'fa-undo' in older versions
            default => 'fa-circle'
        };
    }
}
