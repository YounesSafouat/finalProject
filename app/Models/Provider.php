<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name','mail','facebook','tweet','linkden'];
    public function course()
    {
        return $this->HasMany(Course::class );
    }
    use HasFactory;
}
