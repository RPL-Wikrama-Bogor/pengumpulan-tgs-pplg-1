<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Late extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'information',
        'bukti',
        'date_time_late',
        'image_path'
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
