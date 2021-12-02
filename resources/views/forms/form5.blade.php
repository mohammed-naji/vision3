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
        <form action="{{ route('form5') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-6 mb-3">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Full Name" />
                </div>
                <div class="col-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" />
                </div>

                <div class="col-6 mb-3">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Mobile" />
                </div>

                <div class="col-6 mb-3">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject" />
                </div>

                <div class="col-12 mb-3">
                    <label>Message</label>
                    <textarea rows="5" name="message" class="form-control" placeholder="Message"></textarea>
                </div>
            </div>

           <div class="text-center"> <button class="btn btn-dark btn-lg w-25">Send</button></div>

        </form>
    </div>
  </body>
</html>
