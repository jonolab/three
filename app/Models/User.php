<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'm_user';

    protected $casts = [
        'id' => 'string'
    ];

    protected $fillable = [
        'login_id',
        'sei',
        'mei',
        'password',
        'is_admin'
    ];

}
