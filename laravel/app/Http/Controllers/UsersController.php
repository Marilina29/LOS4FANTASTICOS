<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Product;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::find(Auth::user()->id);
        $orders = Order::where('user_id', '=', Auth::user()->id)->where('status', '=', 1)->get()
                              ->groupBy('order_number');


        // $numCompra = $orders->pluck('order_number')->unique();
        // // dd($numCompra);
        // $carrito = [];
        //
        // foreach ($numCompra as $key => $num) {
        //   foreach ($orders as $k => $order) {
        //     if($order->order_number = $num){
        //       $carrito[$num][] = $order;
        //     }
        //   }
        // }


        return view('perfil', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
            "titulo" => "string|min:1"

          ];

          $messages = [
            "string" => "El campo :attribute debe ser texto.",
            "min" => "El campo :attribute debe tener al menos :min carateres."
          ];

          $this->validate($req, $rules, $messages); //Si validamos tenemos que mostrar los errores al usuario.

          $ruta = $req->file('image')->store('public/img'); //Guarda la imagen en el filesistem
          $nombreImg = basename($ruta);

          $user = new Movie();

          $user->name = $req['name'];
          $useruser->surname = $req['surname'];
          $user->email = $req['email'];
          $user->dni = $req['dni'];
          $user->telephone = $req['telephone'];
          $user->password = $req['password'];

          $user->save();

          return redirect('home');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
