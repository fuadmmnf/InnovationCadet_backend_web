<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_title',
        'course_des',
        'image',
        'type',
        'sheet_amount',
        'duration',
    ];
}
