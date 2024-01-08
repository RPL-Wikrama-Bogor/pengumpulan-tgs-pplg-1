<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable= [
        'user_id',
        'medicines',
        'name_customer',
        'total_prince'
    ];

    //penegasan tipe data dari migraton (hasil property ini ketika diambil atau diinsert/update dibuat dalam bentuk tipe data apa)
    protected $casts = [
        'medicine' => 'array',
    ];
}
