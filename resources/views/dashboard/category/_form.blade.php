@csrf        
<div class="form-group mt-3">
    <label for="name">Nombre Categoria</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $category->name ?? "") }}">
</div>   
