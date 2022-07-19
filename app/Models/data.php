<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $guarded = [];

    protected $table="data";
    protected $casts = ["date" => "datetime", "links" => "array"];



    public function getAvatarAttribute(){
        return   asset('/uploads/personalImages/'.$this->personal_image.'');
    }

    public function getAttachedFileAttribute(){
        return   asset('/uploads/fileImages/'.$this->file_image.'');
    }

    public static function search($search)
    {
        return empty($search) ? static::query() :
         static::where('fullname', 'LIKE', '%'.$search.'%');
    }
}
