<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pin',
        'cin',
        'sex',
        'dob',
        'email',
        'phone',
        'address',
    ];
}
