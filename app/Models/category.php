<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 
        'description'
    ];

    // Relasi satu kategori bisa memiliki banyak menu
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
