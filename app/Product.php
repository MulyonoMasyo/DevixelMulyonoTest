<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['id','name','price','color','status_id'];
    protected $table='product';

     public function Status(){
        return $this->belongsTo('App\Status'); 
    }
}
