<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'student_id',
        'name',
        'course',
        'year_level',
    ];
}
