@csrf        
<div class="form-group mt-3">
    <label for="name">Articulo</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $post->name ?? "") }}">
</div>     
<div class="form-group mt-3">
    <label for="description">Contenido</label>
    <textarea class="form-control" name="description" id="CkEditor" rows="10">
        {{ old('description', $socialNetwork->description ?? "") }}
    </textarea>
</div>
<div class="form-group mt-3">
    <label for="category_id">Categorías</label>
    <select class="form-control" name="category_id" id="category_id">
        <option value="">Seleccionar</option>
        @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $title }}</option>            
        @endforeach
    </select>
</div>
<div class="form-group mt-3">
    <label for="state">Posted</label>
    <select class="form-control" name="state" id="state">
        @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
    </select>
</div>