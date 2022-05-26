<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    public function Attributes()
    {
        return $this->belongsToMany(Attribute::class,'category_attribute','c_a_category_id','c_a_attribute_id');
    }
    public function Product()
    {
        return $this->hasMany(Product::class,'pro_category_id');
    }
}
