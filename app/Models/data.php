<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $guarded = [];

    protected $casts = ["date" => "datetime", "links" => "array"];
}
