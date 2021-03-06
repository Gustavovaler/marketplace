@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
       
        <div class="col-md-8">
            <div class="card">
                <div class="guarda">
            
                </div>
                <div class="card-header"><h3>Registro</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- -----------------CAMPO NOMBRES ---------------------------- --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombres</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control form-search @error('name') is-invalid @enderror" name="nombres" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- --------------------CAMPO APELLIDOS------------------------- --}}
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Apellido/s</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control form-search @error('name') is-invalid @enderror" name="apellidos" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- ------------------------CAMPO EMAIL-------------------------------- --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-search @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- -------------------------PROVINCIA------------- --}}
                        <div class="form-group row">
                            <label for="provincia" class="col-md-4 col-form-label text-md-right">Provincia</label>

                            <div class="col-md-6">                               
                                <select name="provincia" id="provincias" class="form-search" >
                                    <option disabled selected>Selecciona Provincia</option>
                                    @foreach ($provincias as $provincia)
                                        @if ($provincia->nombre == "Ciudad Autónoma de Buenos Aires")
                                            <option value="{{$provincia->nombre}},{{$provincia->id}}" >C.A.B.A</option> 
                                            @continue
                                        @endif
                                      <option value="{{$provincia->nombre}},{{$provincia->id}}" >{{$provincia->nombre}}</option> 
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                        {{-- ---------------------------CUIDAD------------------ --}}
                        <div class="form-group row">
                            <label for="localidad" class="col-md-4 col-form-label text-md-right">Localidad</label>

                            <div class="col-md-6">                               
                                <select name="localidad" id="ciudad" class="form-search">
                                   
                                </select>
                               
                            </div>
                        </div>
                        {{-- *------------------------- CAMPO CALLE -------------- --}}
                        <div class="form-group row">
                            <label for="calle" class="col-md-4 col-form-label text-md-right">Calle</label>

                            <div class="col-md-6">
                                <input id="calle" type="text" name="calle" class="form-control form-search " required >
                            </div>
                        </div>
                        {{-- ------------------NUMERO DE PUERTA----------- --}}
                        <div class="form-group row">
                            <label for="numero_puerta" class="col-md-4 col-form-label text-md-right">Numero</label>

                            <div class="col-md-2">
                                <input id="numero_puerta" type="number" name="numero_puerta" class="form-control form-search " required >
                            </div>
                            <label for="" class="col-form-label">Piso/Dpto</label>
                            <div class="col-md-2">
                                
                                <input id="departamento" type="text" name="departamento" class="form-control form-search " required >
                            </div>
                        </div>
                        {{-- --------------CAMPO TELEFONO------------------ --}}
                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="number" name="telefono" class="form-control form-search " required >
                            </div>
                        </div>
                        {{-- --------------------------CAMPO PASSWORD----------------------- --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control form-search  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- --------------------------CAMPO CONFIRMAR PASSWORD----------------------- --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-search " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarme
                                </button>                                
                        </div>
                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
window.onload = function(){
    $("#ciudad").hide();
    $("#provincias").change(function(){
        $.ajax({        
            // --- convierte provincias.val en un array para enviar solo el item 0    
            url: "/utils/" + $(this).val().split(',')[0],
            method: 'GET',
            success: function(data) {
                $('#ciudad').html(data.html+"<option value='Otro'>Otro</option>");    
                $("#ciudad").show();            
            }
        });
    });
}
</script>
    
@endsection
