<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\User;
use App\Localidad;
use App\Provincia;
use App\Categoria;


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
       return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {

            $categorias = Categoria::all();
            
            return view('products.create', compact('categorias'));
        }
        else
        {
            
            return redirect('/login?redirect_to=/products/create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Product();
        $producto->product_name = $request->input('titulo');
        $producto->description = $request->input('descripcion');
        $producto->quantity = $request->input('cantidad');
        $producto->image1 = $request->input('imagen1');
        $producto->image2 = $request->input('imagen2');
        $producto->price = $request->input('precio');
        $producto->is_new = $request->input('condicion');
        $producto->marca = $request->input('marca');
        $producto->modelo = $request->input('modelo');
        $producto->origen = $request->input('origen');
        $producto->categoria_id = $request->input('categoria');
        $producto->seller_id = Auth::id();
        $producto->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $seller = User::find($product->seller_id);
        $provincia = Provincia::find($seller->id_provincia);
        $localidad = Localidad::find($seller->localidad);
        $categoria = Categoria::find($product->categoria_id);
        
        return view('products.show', compact('product','seller', 'provincia', 'localidad', 'categoria'));
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
