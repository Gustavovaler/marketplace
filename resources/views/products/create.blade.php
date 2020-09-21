@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-md-8">
            <div class="card">
                <div class="guarda"></div>                        
                <div class="card-header">
                   <h3> Publica tu producto</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('products.store')}}">
                        @csrf
                        <!-- -------------titulo -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Titulo</label>
                        
                            <div class="col-md-6">
                                <input type="text" class="form-control form-search" name="titulo" value="" required autocomplete="titulo" autofocus>                               
                            </div>
                        </div>
                        <!-- ---------------------MARCA -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Marca</label>
                        
                            <div class="col-md-6">
                                <input  type="text" class="form-control form-search" name="marca" value="" required autocomplete="titulo" autofocus>                                                 
                            </div>
                        </div>
                        <!-- --------------------------MODEWLO -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Modelo</label>
                        
                            <div class="col-md-6">
                                <input type="text" class="form-control form-search" name="modelo" value="" required autocomplete="titulo" autofocus>                                                 
                            </div>
                        </div>
                        <!-- -----------------------cantidad condicion -->
                        <div class="form-group row">                       
                            <div class="col-md-6 offset-2" >
                                
                                <label for="usado" class="col-md-4 col-form-label text-md-right">Usado</label>
                                <input type="radio" value=0 id="usado" name="condicion" class="">
                                <label for="nuevo" class="col-md-4 col-form-label text-md-right">Nuevo</label>
                                <input type="radio" value=1 id="nuevo" name="condicion" class="" checked>
                            </div>
                        </div>
                        <!-- *-------------------------------------- CANTIDAD-->
                        <div class="form-group row">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-right">Cantidad</label>
                        
                            <div class="col-md-6">
                                <input type="number" class="form-control form-search" name="cantidad" value="1" required autocomplete="titulo" autofocus min=1>                                                 
                            </div>
                        </div>
                        <!-- ----------------------------------ORIGEN -->
                        <div class="form-group row">
                            <label for="origen" class="col-md-4 col-form-label text-md-right">Origen</label>
                        
                            <div class="col-md-6">
                                <input type="text" class="form-control form-search" name="origen"  required autocomplete="titulo" autofocus>                                                 
                            </div>
                        </div>
                        <!-- -------------------------PRECIO -->
                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                        
                            <div class="col-md-6">
                                <input type="number" class="form-control form-search" name="precio"  required autocomplete="titulo" autofocus min=1>                                                 
                            </div>
                        </div>
                        <!-- -----------------------------IMAGEN1   -->

                        <div class="form-group row">
                            <label for="imagen1" class="col-md-4 col-form-label text-md-right">Imagen</label>
                        
                            <div class="col-md-6">
                                <input type="file" class="form-control form-search" name="imagen1"  required autocomplete="imagen1" autofocus>                                                 
                            </div>
                        </div>
                        <!-- -------------------------------IMAGEN2 -->
                         <div class="form-group row">
                            <label for="imagen2" class="col-md-4 col-form-label text-md-right">Imagen</label>
                        
                            <div class="col-md-6">
                                <input type="file" class="form-control form-search" name="imagen2"  required autocomplete="imagen2" autofocus>                                                 
                            </div>
                        </div>
                        <!-- -------------------------DESCRIPCION     -->
                         <div class="form-group row">
                            <label for="origen" class="col-md-4 col-form-label text-md-right">Descripcion</label>
                        
                            <div class="col-md-6">
                                  <textarea name="descripcion" id="" cols="30" rows="6" class="form-control form-search"></textarea>              
                            </div>
                        </div>
                        {{-- -----------BOTON ENVIAR --}}
                        <div class="form-group row">
                            <div class="col-md-6 offset-4">
                           <input type="submit" class="btn btn-primary btn-block" value="Publicar">
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>        
    </div>
   </div>
    
@endsection