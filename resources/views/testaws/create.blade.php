@extends('layouts.app')


@section('content')

<div class="container mt-5">

    <form action="/testaws" method="POST" enctype="multipart/form-data">
        @csrf
        <hr>
        <label for="image">Agregar una imagen</label><br>

        <input type="file" name="image">
        <br><br><br>

        <input type="submit" class="btn btn-success">
        <hr>
    </form>

</div>
    
@endsection