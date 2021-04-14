@extends('prensaUAM')
@section('content')
@include('dashboard.partials.validation-error')

<div class="container">

    @section('title')
    Crear Post
    <hr>
    @endsection

    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')                         
        <button type="submit" class="btn btn-dark mt-3">Publicar</button>
        <button type="button" class="btn btn-light mt-3">Cancelar</button>            
    </form>

</div>



@endsection