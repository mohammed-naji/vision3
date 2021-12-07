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

            <tr>
                <td>1</td>
                <td>dd</td>
                <td>Toy</td>
                <td>100$</td>
                <td>0</td>
                <td></td>
                <td>4</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>dd</td>
                <td>Toy</td>
                <td>100$</td>
                <td>0</td>
                <td></td>
                <td>4</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </table>

    </div>

</body>
</html>
