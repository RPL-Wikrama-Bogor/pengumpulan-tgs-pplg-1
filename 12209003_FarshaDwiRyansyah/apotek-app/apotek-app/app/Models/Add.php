<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account',
        'customer_name',
    ];

    protected $casts = [
        'account' => 'array',
    ];
}
