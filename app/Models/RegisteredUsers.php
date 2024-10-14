<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUsers extends Model
{
    use HasFactory;

    protected $table = "registered_users";

    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password'
    ];
}
