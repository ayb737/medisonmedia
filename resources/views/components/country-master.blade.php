<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="css/blog-home.css" rel="stylesheet">
</head>
<body>
    <form method="post"
     {{-- action="{{route('countries.store')}}"  --}}
     enctype="multipart/form-data">
                        {{-- @csrf



                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button> --}}

  <div class="container">
      <div class="col-md-8">
        @yield('content')
      </div>
      <div class="form-group">
      <div class="col-md-4">
        <div class="card my-4">
          <h5 class="card-header">Add new country</h5>
          <div class="card-body">
            <div class="input-group">
                <input type="text"
                       name="name"
                       class="form-control"
                       id="name"
                       aria-describedby=""
                       placeholder="Enter name">
                       <br>
            </div>
            </div>
            <div class="card-body">
                <div class="input-group">
                    <input type="text"
                           name="ISO"
                           class="form-control"
                           id="ISO"
                           aria-describedby=""
                           placeholder="Enter ISO">
                           <br>
                </div>
                <br>
            <button class="btn btn-secondary" type="button">Save</button>
          </div>
        </div>
        <div class="card my-4">
          <h5 class="card-header">List of countries</h5>
          <div class="container">
          <div class="row">
            <span class="card-header">#</span>
            <span class="card-header">User</span>
            <span class="card-header">Name</span>
            <span class="card-header">ISO</span>
            <span class="card-header">Edit</span>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
