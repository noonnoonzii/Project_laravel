<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_pic extends Model
{
    protected $table ='home_pics';
    protected $fillable =[
        'image_homepic',
        'id_admin'
    ];
}
