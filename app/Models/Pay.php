<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $fillable = ['CardNumber','Name','Expiry','CVVCVC'];

    use HasFactory;
}
