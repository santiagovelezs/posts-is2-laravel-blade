@extends('prensaUAM')
@section('content')
@include('dashboard.partials.validation-error')

<div class="container">

    @section('title')
    Crear Categoria
    <hr>
    @endsection    
    <form action="{{ route('category.store') }}" method="post">
        @include('dashboard.category._form')                         
        <button type="submit" class="btn btn-dark mt-3">Publicar</button>
        <button type="button" class="btn btn-light mt-3">Cancelar</button>            
    </form>    
</div>



@endsection