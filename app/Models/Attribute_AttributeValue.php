<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute_AttributeValue extends Model
{
    //
    protected $table ="attribute_value";
    public function Attribute()
    {
        return $this->belongsTo(Attribute::class,'atv_attribute_id');
    }
    public function Product()
    {
        return $this->belongsToMany(Product::class,'product_attribute','pa_attribute_value_id','pa_product_id');
    }
}
