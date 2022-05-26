<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    protected $fillable = [
        'wh_name',
        'wh_adr'
    ];

    protected $table ="warehouse_stock";
    public function Product()
    {
        return $this->belongsToMany(Product::class,'product_of_warehouses','warehouse_id','wh_product_id')->withPivot(['quantity']);
    }
}
