<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainer_id',
        'user_id',
    ];
}
