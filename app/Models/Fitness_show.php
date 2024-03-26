<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_show extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'fitness_id'
    ];
}
