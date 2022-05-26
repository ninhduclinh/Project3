<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    public function Product()
    {
        return $this->belongsTo(Product::class,'or_product_id');
    }
}
