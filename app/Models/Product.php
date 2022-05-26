<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    public function Category()
    {
        return $this->belongsTo(Category::class,'pro_category_id');
    }
    public function ProductAndAttributeValue()
    {
        return $this->belongsToMany(Attribute_AttributeValue::class,'product_attribute','pa_product_id','pa_attribute_value_id');
    }
    public function Rating()
    {
        return $this->hasMany(Rating::class,'ra_product_id');
    }
    public function FavoriteProduct()
    {
        return $this->belongsToMany(User::class,'favorite_product','fp_product_id','fp_user_id');
    }
    public function Warehouse()
    {
        return $this->belongsToMany(WareHouse::class,'product_of_warehouses','wh_product_id','warehouse_id')->withPivot('quantity');
    }
}
