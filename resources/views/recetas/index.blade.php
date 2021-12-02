
@extends('layouts.app')

@section('botones')
<<<<<<< HEAD
    <a href="{{ route('recetas.create') }}" class="btn btn-primary mr-2">Crear Receta</a>
=======
    <a href="{{recetas.create}}" class="btn btn-primary mr-2">Crear Receta</a>
>>>>>>> 4d0c514002dd06db64ce912fce3fd7e9373dec1c
@endsection
@section('content')
<h2 class="text-center mb-5">Administra tus recetas</h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col">Título</th>
                <th scole="col">Categoría</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pizza</td>
                <td>Pizzas</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection