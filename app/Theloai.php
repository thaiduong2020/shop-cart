<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    protected $table = 'theloai';

    public function product(){ 
        return $this->hasMany('App\Product','id_theloai','id');
    }
    public function type_product(){ 
        return $this->hasMany('App\Type_product','id_theloai','id');
    }
}
