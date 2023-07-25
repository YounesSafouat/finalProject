<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_course_pivote extends Model
{
    protected $table = 'user_course_pivote';
    protected $fillable = ['user_id','course_id'];

    use HasFactory;
}
