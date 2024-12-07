<?php

namespace App\Models;

use App\Models\menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'name',
        'rating',
        'review'
    ];

    public function menu()
    {
        return $this->belongsTo(menu::class);
    }
}
