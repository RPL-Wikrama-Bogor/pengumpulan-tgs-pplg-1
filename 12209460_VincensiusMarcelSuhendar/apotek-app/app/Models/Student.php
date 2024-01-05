<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    // property saves column names that can be filled w/value
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
}
