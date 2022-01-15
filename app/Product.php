<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $primaryKey ='id_product';
    protected $fillable =[
        'name_product',
        'brand',
        'description',
        'price',
        'pic_product',
        'id_admin',
        'id_typeproduct'
    ];

    public function category(){
        return $this->belongsTo(type_product::class,'id_typeproduct');
    }
}
