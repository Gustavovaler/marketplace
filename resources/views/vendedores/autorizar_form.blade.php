@extends('layouts.app')


@section('content')

<div class="container mt-5">
    <h3>
        Estimad@ cliente:
    </h3>
    <p class="ml-3">
        Usted será redirigido a Mercadopago donde podrá brindar autorización
         para que podamos realizar cobros en su nombre. De  ninguna manera autoriza a MARKETPLACE a otro tipo de
         movimiento en su cuenta de Mercadopago que no sea solo el de ingresar importes a su cuenta.
         Asimismo puede cancelar su autorizacion en cualquier momento e instantaneamente desde su panel de cuenta.
    </p>
    <p class="ml-3">
        Nota: recuerde salir de su cuenta de Mercadopago si está logueado y no es la cuenta que usará para 
        vender en MARKETPLACE.
    </p>
    <div>
        <a href="" class="btn btn-primary  mr-5 float-right">Si, ir a autorizar </a>
    </div>

</div>
    
@endsection