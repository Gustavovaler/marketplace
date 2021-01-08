<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    public function seller_auth_form(){
        return view('vendedores.autorizar_form');
    }

    public function get_link_up_code(){
        return "este retorna el code de autorizacion";
    }

    public function get_seller_credentials(){
        return response(201);
    }


}
