<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use softDeletes;
    //Premitirá guardado masivo de datos en la tabla.
    protected $guarded = [];

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }
    public function photos(){
      return $this->hasMany('App\ImagesProducts', 'product_id');
    }
    public function order(){
      return $this->hasMany('App\Order', 'id');
    }

}
