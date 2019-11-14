<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Style;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $products = Product::all();

    $vac = compact('products');
    return view('products',$vac);
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $styles = Style::all();
        return view('agregoProducto', compact('categories', 'styles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {


      $ruta = $req->file('img')->store('public/imgagenes'); //Guarda la imagen en el filesistem
      $nombreImg = basename($ruta);

      $product = new Product();

        $product->name = $req['name'];
        $product->code = $req['code'];
        $product->category_id = $req['category'];
        $product->description = $req['description'];
        $product->color = $req['color'];
        $product->price = $req['price'];
        $product->style_id = $req['style'];
        $product->img = $nombreImg; //El que nos da laravel
        $product->save();

      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $productDetail = Product::find($product->id);

        return view('product', compact('productDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


}
