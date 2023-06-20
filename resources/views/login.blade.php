<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <style>
      body{
        background-color: #C3B091;
      }
    </style>
</head>
<body>
    
    <form action="{{ url('user/auth') }}" method="post">
        @csrf
        <div class="container h-100">
          <div class="vh-100 row h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 py-5">
              <h3 class="text-center fw-bold">Login</h3>
            <form action="">
              <div class="col-mb-3">
                <label for="" class="form-label fw-bold">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan email">
              </div>
               <div class="col-mb-3">
                <label for="" class="form-label fw-bold">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password">
               </div>
               
               <div class="pt-3">
                <input type="submit" value="login" class="form-control text-white fw-bold" style="background-color: #8E806A">
               </div>
            </form>
          </div>
        </div>
      </div>
    </form>
</body>
</html>