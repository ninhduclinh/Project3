<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $table ="ratings";
    public function Product()
    {
        return $this->belongsTo(Product::class,'ra_product_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class,'ra_user_id');
    }
}
