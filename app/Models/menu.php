<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
