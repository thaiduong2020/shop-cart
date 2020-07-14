<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    protected $table = 'type_products';

    public function product(){ 
        return $this->hasMany('App\Product','id_type','id');
    }

    public function theloai(){ 
        return $this->belongsto('App\Theloai','id_theloai','id');
    }
}
