<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
