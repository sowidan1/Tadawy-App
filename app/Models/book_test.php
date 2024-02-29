<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_test extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_name',
        'test_name',
        'test_id',
        'location',
        'price',
        'date',
        'time',
        'visit_type',
        'patient_id'
    ];
}
