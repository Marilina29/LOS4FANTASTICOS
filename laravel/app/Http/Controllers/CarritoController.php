<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CarritoController extends Controller
{
    public function index(Request $formulario){
      $usuario = (int) $formulario["usuario"];
      $orders = Order::where('user_id',$usuario)->where('status',0)->get();
      return view("carrito",compact('orders'));
    }
}
