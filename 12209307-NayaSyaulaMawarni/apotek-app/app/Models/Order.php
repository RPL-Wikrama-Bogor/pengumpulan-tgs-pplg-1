<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medicines',
        'name_customer',
        'total_price',
    ];

    protected $casts = [
        'medicines' => 'array',
    ];

    public function user()
    {
        //menghubungkan ke primary key nya
        //dalam kurung merupakan nama model tempat penyimpanan dri pk nya ke fk yg ada di model ini
        return $this->belongsTo(User::class);
    }

}
