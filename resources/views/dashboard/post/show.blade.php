@extends('prensaUAM')
@section('content')

<div class="container">
    <a class="btn btn-outline-dark mt-3 mb-3" href="{{ URL::previous() }}">Regresar</a>
    <div class="form-group">
        <label for="name">Título</label>
        <input readonly class="form-control" type="text" name="name" id="name" value="{{ $post->name }}">
    </div>
    <div class="form-group">
        <label for="category">Categoria</label>
        <input readonly class="form-control" type="text" name="category" id="category" value="{{ $post->category_id }}">
    </div>
    <div class="form-group">
        <label for="description">Contenido</label>
        <!-- <textarea readonly class="form-control" type="text" name="description" id="CkEditor">{{ $post->description }}</textarea> -->
        <div class="card">
            {!! $post->description !!}
        </div>
    </div>
</div>

@endsection