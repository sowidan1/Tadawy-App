<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class X_Ray extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'price',
        'ray_test_id'
    ];
}
