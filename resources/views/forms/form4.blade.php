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
        @include('forms.errors')
        <form action="{{ route('form4') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Write your name here.." />
            </div>

            <div class="mb-3">
                <label>CV</label>
                <input type="file" id="cv" onchange="loadFile(event)" class="form-control" name="cv" />
                <img width="200" id="preview" src="" alt="">
                {{-- <input accept=".pdf" type="file" class="form-control" name="cv" /> --}}
                {{-- <input type="file" class="form-control" name="cv[]" multiple /> --}}
            </div>

            <button class="btn btn-dark">Upload</button>

        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var loadFile = function(event) {
    var output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
    </script>
  </body>
</html>
