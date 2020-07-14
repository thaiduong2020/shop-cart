<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    public function bills(){
        return $this->hasMany('App\Bill','id_customer','id');
    }
}
