<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    public function AttributeValue()
    {
        return $this->hasMany(Attribute_AttributeValue::class,'atv_attribute_id');
    }
}
