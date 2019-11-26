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


      $order = Order::where('product_id', '=', $request->id)->where('user_id', Auth::user()->id)->first();
      if($order){
        $order->cant++;
        $order->save();
      } else {
        $product = Product::find($request->id);

        $item = new Order;
        $item->name=$product->name;
        $item->price=$product->price;
        $item->img=$product->img;
        $item->status=0;
        $item->user_id=Auth::user()->id;
        $item->product_id=$product->id;

        $item->save();
      }

      return redirect('/carrito');

    }

    public function masUno(Request $request){
      $order = Order::find($request->id);
      $order->cant++;
      $order->save();
      return redirect('/carrito');

    }

    public function delete(Request $request){
      $item = Order::find($request->id);
      if($item->cant != 1){
        $item->cant--;
        $item->save();
      } else{
        $item->delete();
      }
      return redirect('/carrito');
    }

    public function cartclose(Request $req){

      $items = Order::where("user_id", Auth::user()->id)->where("status",0)->get();
      $order_number = Order::max('order_number') +1;

      foreach($items as $item){
        $item->status = 1;
        $item->order_number = $order_number;
        $item->save();
      }

      return redirect('/');

    }
}
