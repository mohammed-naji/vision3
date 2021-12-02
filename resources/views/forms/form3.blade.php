<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container my-5">

        @if(session('msg'))
        <div class="alert alert-danger">
            {{ session('msg') }}
        </div>
        @endif

        {{-- @include('forms.errors') --}}

        <form action="{{ route('form3') }}" method="post">
            @csrf

            <div class="mb-3">
                <input type="text" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror " placeholder="Email.." />
                @error('email')
                   <small class="invalid-feedback"> {{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <input
                    type="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror "
                    placeholder="Password.."
                    autocomplete="new-password"
                />
                @error('password')
                   <small class="invalid-feedback"> {{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <input type="password" name="password_confirmation" class="form-control"
                    placeholder="Confirm Password.." autocomplete="new-password" />
            </div>

            <div class="mb-3">
                <input type="date" value="{{ old('start_from') }}" class="form-control @error('start_from') is-invalid @enderror" name="start_from" />
                @error('start_from')
                   <small class="invalid-feedback"> {{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <input type="date" value="{{ old('end_to') }}" class="form-control @error('end_to') is-invalid @enderror" name="end_to" />
                @error('end_to')
                   <small class="invalid-feedback"> {{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-dark">Login</button>

        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
