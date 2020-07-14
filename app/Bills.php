<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = 'bills';
    protected $primaryKey = 'id';

    public function bill_detail(){
        return $this->hasMany('App\Bill_detail','id_bill','id');
    }

    public function customer(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }
}
