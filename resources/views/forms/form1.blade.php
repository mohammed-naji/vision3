<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container my-5">
        <form action="{{ route('abed') }}" method="post">

            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            @csrf

            <input type="text" name="name" class="form-control" placeholder="Write your name here.." />
            <input type="text" name="age" class="form-control" placeholder="Write your age here.." />
            {{-- <input type="text" name="name1" class="form-control" placeholder="Write your name here.." />
            <input type="text" name="nam2" class="form-control" placeholder="Write your name here.." />
            <input type="text" name="nam3" class="form-control" placeholder="Write your name here.." />
            <input type="text" name="nam4" class="form-control" placeholder="Write your name here.." /> --}}

            <button class="btn btn-dark">Welcome</button>

        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
