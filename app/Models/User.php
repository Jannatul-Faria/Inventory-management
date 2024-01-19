<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'class',
        'password',
        'otp',
        'address',
        'state',
        'zip',
        'image',
        'gender',

    ];

    protected $attributes = [
        'otp' => '0',
        'checkbox' => '0',

    ];
}
