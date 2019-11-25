<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Auth;

class CarritoController extends Controller
{
    // public function index(Request $formulario){
    //   $usuario = (int) $formulario["usuario"];
    //   $orders = Order::where('user_id',$usuario)->where('status',0)->get();
    //   return view("carrito",compact('orders'));
    // }

    public function index(){
      $orders = Order::where('user_id', '=', Auth::user()->id)->where('status', '=', '0')->get();
      // $products = [];
      // foreach($orders as $order){
      //   $product = Product::find($order->product_id);
      //   $products[]= $product;
      // }
      return view('carrito', compact('orders'));
    }

    public function store(Request $request){
      $product = Product::find($request->id);

      $item = new Order;
      $item->name=$product->name;
      $item->description=$product->description;
      $item->price=$product->price;
    //  $item->img=$product->img;
      $item->status=0;
      $item->user_id=Auth::user()->id;
      $item->product_id=$product->id;
      $item->img=$product->img;

      $item->save();



      return redirect('/carrito');

    }

    public function delete(Request $request){
      $item = Order::find($request->id);
      $item->delete();



      return redirect('/carrito');
    }
}
