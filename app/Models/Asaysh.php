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

    protected $table = 'asayshes';

    public function data()
    {
        return $this->belongsTo(data::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function search($search)
    {
        return empty($search) ? static::query() :
         static::where('fullname', 'LIKE', '%'.$search.'%');
    }
}
