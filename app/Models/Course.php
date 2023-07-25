<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title','img','provider_id','description'];
    function provider()
    {
        return $this->BelongsTo(Provider::class);
    }
    function user()
    {
        return $this->belongsToMany(User::class,'user_course_pivote');
    }
    public function lessons()
    {
        return $this->HasMany(Lesson::class );
    }
    use HasFactory;
}
