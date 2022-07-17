<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cyber extends Model
{
    protected $table="cybers";

    protected $fillable = [
        'data_id',
        'user_id',
        'note',
    ];
}
