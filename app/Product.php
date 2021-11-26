<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $primaryKey ='id_product';
    protected $fillable =[
        'name_product',
        'price',
        'pic_product',
        'id_admin',
        'id_typeproduct'
    ];
}
