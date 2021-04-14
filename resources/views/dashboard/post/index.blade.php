@extends('prensaUAM')
@section('content')

<div class="container">

<a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">Crear</a>

<table class="table table-striped">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Nombre
            </td>
            <td>
                Categoria
            </td>
            <td>
                Estado publicación
            </td>
            <td>
                Creación
            </td>
            <td>
                Actualización
            </td>
            <td>
                Acciones
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>
                {{ $post->id }}
            </td>
            <td>
                {{ $post->name }}
            </td>
            <td>
                {{ $post->category->name ?? '' }}
            </td>
            <td>
                {{ $post->state }}
            </td>
            <td>
                {{ $post->created_at->format('d-m-Y') }}
            </td>
            <td>
                {{ $post->updated_at->format('d-m-Y') }}
            </td>
            <td>
                <a href="{{ route('post.show',$post->id) }}"><i class="far fa-eye"></i></a>
                <i class="far fa-edit"></i>                
                <i class="far fa-trash-alt"></i>
            </td>
        </tr>            
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}

</div>

@endsection