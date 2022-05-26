<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Nofitication extends Model
{
    //
    protected $table = 'nofitication';
    public function UserSender()
    {
        return $this->belongsTo(User::class,'nof_sender');
    }
    public function UserReceiver()
    {
        return $this->belongsTo(User::class,'nof_receiver');
    }
}
