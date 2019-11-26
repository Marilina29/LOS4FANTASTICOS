<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{

  protected $guarded = [];

  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }

  public function product(){
    return $this->belongsTo('App\Product', 'code_id');
  }

}
