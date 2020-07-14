<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table = 'bill_detail';

    public function product(){
        return $this->belongsTo('App\Product','id_products','id');
    }
    public function bills(){
        return $this->belongsTo('App\Bills','id_bill','id');
    }

}
