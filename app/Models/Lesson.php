<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    function courses()
    {
        return $this->BelongsTo(Course::class);
    }
    protected $fillable = ['title','lesson_number','url','course_id'];
    use HasFactory;
}
