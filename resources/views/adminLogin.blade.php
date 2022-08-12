<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset ('/css/style.css') }}">
    <title>LoginPage</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL:: asset('wallapaper/man.png')}}"  style="width:50px;" class="rounded-pill">
                ADMIN LOGIN PAGE </a>
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">HOME</a>
                  </li>
              </ul>
        </div>
    </nav>
     <form class="login-form" method="post" action="{{ route('adminpage') }}" autocomplete="off">
        @csrf
        <div class="box-container" >
            <h2> LOGIN </h2>
            <div class="mb-3">
                Username:<br><input type="text" placeholder="Enter your username"  name= "name" class="name" required=""><br>
            </div>
            <div class="mb-3">
                Password: <br><input type="password" placeholder="Enter your Password"  name="password" class="password" required=""><br>
            </div>
            <div class ="mb-3">
                ,<button type="submit"class="btn btn-primary">LOGIN</button>
            </div>
            {{-- <a href="{{route('registration')}}">new user?</a> --}}
        </div>

     </form>


</body>
</html>
