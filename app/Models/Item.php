<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'code', 'price', 'is_active'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
