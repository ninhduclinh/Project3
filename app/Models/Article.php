<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table="articles";
    public function User()
    {
        return $this->belongsTo(User::class,'a_author_id');
    }
}
