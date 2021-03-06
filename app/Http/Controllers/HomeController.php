<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use SebastianBergmann\Comparator\SplObjectStorageComparator;

class HomeController extends Controller
{    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $n_art_home = 8;
        $numbers = [];
        $products_raw = Product::all();
        $products = [];
        // elijo numeros de productos al azar en cada request
        for ($i=0; $i < $n_art_home; $i++) { 
           $n = rand(1, count($products_raw)-1);
        //    cotejo que el numero no este repetido
           if (in_array($n, $numbers)) {
               $i--;
               continue;       
           }
            array_push($numbers, $n);
            $products[$i] = $products_raw[$n];
        }   
             
        return view('home', compact('products'));
    }
}

