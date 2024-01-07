<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    //untuk menyimpan nama nama column yang diisi valuenya
    protected $fillable = [
        'type',
        'name',
        'price',
        'stock',
    ];
}
