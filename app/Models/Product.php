<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',
        'quantity',
        'description',
        'image',
        'featured',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function imageUrl() {
        return $this->image ? Storage::disk('products')->url($this->image) : asset('assets/image-not-available.png');
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_items')
                    ->withPivot('quantity', 'unit_price');
    }

}
