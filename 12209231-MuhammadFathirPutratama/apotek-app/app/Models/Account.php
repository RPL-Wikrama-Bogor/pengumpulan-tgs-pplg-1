<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts'; //menghubungkan ke table

    // pengaturan bahwa kolom bisa diberi value
    protected $fillable = [
        'nama',
        'email',
        'role',
        'password',
    ];
}