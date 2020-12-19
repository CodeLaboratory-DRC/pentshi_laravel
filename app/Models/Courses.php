<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'promotion',
        'faculty',
        'domain',
        'year',
        'university',
        'members_id',
        'university',
    ];
}
