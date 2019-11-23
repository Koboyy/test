<select class="form-control" name="{{ $name }}">
    <option value="">Pilih</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}"> {{ ucfirst($category->name) }}</option>
    @endforeach
</select>