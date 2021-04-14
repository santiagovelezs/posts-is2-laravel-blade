@extends('prensaUAM')
@section('content')

<div class="container">

    @section('title')
    Categories
    <hr>
    @endsection

<a class="btn btn-dark mt-3 mb-3" href="{{ route('category.create') }}">Crear</a>

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
        @foreach ($categories as $category)
        <tr>
            <td>
                {{ $category->id }}
            </td>
            <td>
                {{ $category->name }}
            </td>            
            <td>
                {{ $category->created_at->format('d-m-Y') }}
            </td>
            <td>
                {{ $category->updated_at->format('d-m-Y') }}
            </td>
            <td>                
                <i class="far fa-edit"></i>                
                <i class="far fa-trash-alt"></i>
            </td>
        </tr>            
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}

</div>

@endsection