<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    // property saves column names that can be filled w/value
    protected $fillable = [
        'type',
        'name',
        'price',
        'stock',
    ];
}
