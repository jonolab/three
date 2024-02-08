<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'm_ingredient';

    protected $fillable = [
        'id',
        'name',
        'deleted_at',
    ];

}
