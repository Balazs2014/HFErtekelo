<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'url',
        'grade',
        'message',
    ];

    protected $visible = [
        'id',
        'grade',
        'message',
    ];
}
