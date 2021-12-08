<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Products</title>
</head>
<body>

    <div class="container my-5">

        @if (session('msg'))
        <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>All Products</h1>
            <a href="{{ route('products.create') }}" class="btn btn-outline-dark">Add new Product</a>
        </div>


        <table class="table table-bordered table-striped table-hover">
            <tr class="table-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Discount End At</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><img width="100" src="{{ asset('uploads/products/'.$product->image) }}" alt=""></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}$</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->discount_end_at }}</td>
                    <td>{{ $product->rating }}</td>
                    <td>
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil"></i></a>
                        {{-- <a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> --}}

                        <form class="d-inline" action="{{route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('هل انت متاكد اخوي؟')" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </table>

        {{ $products->links() }}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
