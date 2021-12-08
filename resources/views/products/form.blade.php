<div class="mb-3">
    <label>Name</label>
    <input class="form-control" name="name" value="{{ $product->name }}" placeholder="Name" />
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Price</label>
    <input class="form-control" name="price" value="{{ $product->price }}" placeholder="Price" />
    @error('price')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea rows="5" class="form-control" name="description" placeholder="description">{{ $product->description }}</textarea>
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>discount</label>
    <input class="form-control" name="discount" value="{{ $product->discount }}" placeholder="discount" />
    @error('discount')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>discount end at</label>
    <input type="date" class="form-control" value="{{ date("Y-m-d", strtotime($product->discount_end_at)) }}" name="discount_end_at" placeholder="discount" />
    @error('discount_end_at')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>image</label>
    <input type="file" class="form-control" name="image" placeholder="image" />
    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>album</label>
    <input type="file" class="form-control" name="album[]" multiple placeholder="album" />
    @error('album')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>rating</label>
    <input class="form-control" value="{{ $product->rating }}" name="rating" placeholder="rating" />
    @error('rating')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>category</label>

    <select name="category_id" class="form-control">
        <option value="" selected disabled>Select Category</option>
        <option {{ $product->category_id == 1 ? 'selected' : ''}} value="1">Games</option>
        <option {{ $product->category_id == 2 ? 'selected' : ''}} value="2">T-Shirts</option>
        <option {{ $product->category_id == 3 ? 'selected' : ''}} value="3">Devices</option>
    </select>

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
