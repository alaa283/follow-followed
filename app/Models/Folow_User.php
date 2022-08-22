<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folow_User extends Model
{
    use HasFactory;

    protected $fillable = [
        'followers',
        'following',
    ];
}
