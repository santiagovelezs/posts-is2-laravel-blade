@extends('prensaUAM')
@section('content')
@include('dashboard.partials.validation-error')

<div class="container">

    <h2>Crear Post</h2>

    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')                         
        <button type="submit" class="btn btn-success mt-3">Publicar</button>
        <button type="button" class="btn btn-danger mt-3">Cancelar</button>            
    </form>

</div>



@endsection