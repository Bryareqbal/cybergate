<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asaysh extends Model
{
    use HasFactory;

    protected $filable = [
        'data_id',
        'user_id',
        'note',
        'isApproved',
    ];

    protected $table = 'asaysh';
}
