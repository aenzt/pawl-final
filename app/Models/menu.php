<?php

namespace App\Models;

use App\Models\review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'image_url',
        'category_id'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    // Relasi menu belongs to satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Scope untuk filter berdasarkan kategori
    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    // Relasi satu kategori bisa memiliki banyak menu
    public function reviews()
    {
        return $this->hasMany(review::class);
    }
}
