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
    $products = Product::paginate(15);
    $categories = Category::all();

    $vac = compact('products', 'categories');
    return view('products',$vac);
  }
  public function directory()
      {
        $products = Product::all();
        $categories = Category::all();
        return view('products', compact('products', 'categories'));
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


      $ruta = $req->file('img')->store('public/imagenes'); //Guarda la imagen en el filesistem
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
        $categories = Category::all();
        return view('product', compact('productDetail', 'categories'));
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

    public function search(){
    $search = $_GET["search"];
    $categories = Category::all();
    $products = Product::where('name', 'like', "%$search%")->paginate(15);
    $products->withPath('?search=' . $_GET["search"]);
    $vac = compact('products', 'categories');
    return view('products', $vac);
    }

    public function filtrar($id){
      $products = Product::where('category_id', '=', $id)->paginate(15);
      $categories = Category::all();
      $vac = compact('products', 'categories');
      return view('products', $vac);
    }

    public function vista($id){
      $product = Product::find($id);
      $vac = compact('product');
      return view('vistaProducto', $vac);
    }
    public function carrito($id){
      $product = Product::find($id);
      $vac = compact('product');
      return view('vistaProducto', $vac);
    }


}
