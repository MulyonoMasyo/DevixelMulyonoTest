<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable=['id','keterangan'];
    protected $table='status';
     public function Product(){
        return $this->hasMany('App\Product') ; }
}
