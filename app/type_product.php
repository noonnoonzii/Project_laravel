<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    protected $table ='type_products';
    protected $primaryKey ='id_typeproduct';


    public function product(){
        return $this->hasMany(Product::class,'id_typeproduct');
    }
}
