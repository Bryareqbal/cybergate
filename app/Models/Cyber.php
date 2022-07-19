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

    public function data()
    {
        return $this->belongsTo(data::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
