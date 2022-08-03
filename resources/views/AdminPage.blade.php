<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset ("css\style2.css")}}">
    <title>Admin Page</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL:: asset('wallapaper/man.png')}}"  style="width:50px;" class="rounded-pill">
                ADMIN PAGE </a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">lOGOUT</a>
                </li>
              </ul>
        </div>

    </nav>
    <div class= "dashboard">
        <ul class="dash-item">
           <li class="nav-item">
              <a class="nav-link2" href="{{route ("addproductpage")}}">ADD PRODUCT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link2" href="{{route ("addcategories")}}">ADD CATEGORIES</a>
            </li>

        </ul>
    </div>
</body>
</html>
