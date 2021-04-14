@extends('prensaUAM')
@section('content')
@include('dashboard.partials.validation-error')

<div class="container">

    <h2>Crear Categoria</h2>

    <form action="{{ route('category.store') }}" method="post">
        @include('dashboard.category._form')                         
        <button type="submit" class="btn btn-success mt-3">Publicar</button>
        <button type="button" class="btn btn-danger mt-3">Cancelar</button>            
    </form>

</div>



@endsection