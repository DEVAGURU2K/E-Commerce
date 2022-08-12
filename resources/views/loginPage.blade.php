<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>LOGIN PAGE</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL:: asset('wallapaper/man.png')}}"  style="width:50px;" class="rounded-pill">
                LOGIN PAGE </a>
              <ul class="navbar-nav">
              </ul>
        </div>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">HOME</a>
          </li>
    </nav>
    <div class= "container">
       <a href="{{route('adminlogin')}}"> <img class="admin-button" src="{{URL:: asset('wallapaper/manager.png')}} " style="width:150px;"></a>
       <a href="{{route('userlogin')}}"> <img class="user-button" src="{{URL:: asset('wallapaper/userlogin.png')}} " style="width:150px;"></a>
    </div>
<style>
    .admin-button  {
        margin-top: 150px;
        margin-left:280px;
    }
    .user-button  {
        margin-top: 150px;
        margin-left:280px;
    }
    .container button{
        width:100px;
        heigth:100px;
    }
</style>
</body>
</html>
