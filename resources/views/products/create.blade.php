<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Products</title>
</head>

<body>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Add New Product</h1>
            <a href="{{ route('products.index') }}" class="btn btn-outline-dark">Return Back</a>
        </div>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input class="form-control" name="name" placeholder="Name" />
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input class="form-control" name="price" placeholder="Price" />
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea rows="5" class="form-control" name="description" placeholder="description"></textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>discount</label>
                <input class="form-control" name="discount" placeholder="discount" />
                @error('discount')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>discount end at</label>
                <input type="date" class="form-control" name="discount_end_at" placeholder="discount" />
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
                <input class="form-control" name="rating" placeholder="rating" />
                @error('rating')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>category</label>

                <select name="category_id" class="form-control">
                    <option value="" selected disabled>Select Category</option>
                    <option value="1">Games</option>
                    <option value="2">T-Shirts</option>
                    <option value="3">Devices</option>
                </select>

                @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-dark btn-lg px-5">Save</button>

        </form>
    </div>

</body>

</html>
