<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'old_price',
        'new_price',
        'category',
        'brand',
        'image',
        'stock',
        'status',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'new_price' => 'decimal:2',
        'stock' => 'integer',
    ];

    /**
     * Accessor for displaying the final price.
     * If new_price is available, use it; otherwise, fallback to price.
     */
    public function getFinalPriceAttribute()
    {
        return $this->new_price ?? $this->price;
    }

    /**
     * Accessor for checking if product is in stock.
     */
    public function getIsInStockAttribute(): bool
    {
        return $this->stock > 0 && strtolower($this->status) === 'available';
    }
}
