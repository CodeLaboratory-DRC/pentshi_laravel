<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'promotion',
        'faculty',
        'domain',
        'year',
        'university',
        'type',
        'members_id',
        'university',
    ];
}
