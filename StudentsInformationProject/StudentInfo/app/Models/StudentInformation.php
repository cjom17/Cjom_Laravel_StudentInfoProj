<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_fname',
        'student_lname',
        'student_age',
        'student_course',
        'student_address'
    ];
}