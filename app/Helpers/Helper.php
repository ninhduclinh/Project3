<?php

use App\Models\Attribute;
use App\Models\Attribute_AttributeValue;
use App\Models\Product;

if (!function_exists('test123456')) {
  function test123456()
  {
     echo "Test Thôi mà";
  }
  
}
if (!function_exists('dataAttributeValue'))
{
    function dataAttributeValue(Attribute $at, Product $product)
  {
    foreach ($product->ProductAndAttributeValue as $atv) 
    {
        if($atv->atv_attribute_id == $at->id)
        {
            echo $atv->atv_value;
        }
    }
  }
}
if (!function_exists('checkDataAttributeValue'))
{
    function checkDataAttributeValue(Attribute $at, Product $product,$value)
  {
    foreach ($product->ProductAndAttributeValue as $atv) 
    {
        if($atv->atv_attribute_id == $at->id)
        {
          if($atv->atv_value == $value)
          {
            return true;
          }
        }
    }
    return false;
  }
}
?>