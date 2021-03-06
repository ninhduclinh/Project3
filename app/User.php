<?php

namespace App;

use App\Models\Nofitication;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function FavoriteProduct()
    {
        return $this->belongsToMany(Product::class,'favorite_product','fp_user_id','fp_product_id');
    }
    public function Transaction()
    {
        return $this->hasMany(Transaction::class,'tr_user_id');
    }
    public function NofiticationReceive()
    {
        return $this->hasMany(Nofitication::class,'nof_receiver');
    }
}
