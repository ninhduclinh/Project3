<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{

    protected $fillable = [
        'source_warehouse_id',
        'dest_warehouse_id',
        'product_id',
        'quantity',
        'note'
    ];
}