<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset ("css\style2.css")}}">
    <title>Userpage</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL:: asset('wallapaper/man.png')}}"  style="width:50px;" class="rounded-pill">
                Userpage </a>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link2" href="#">ADD CART</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link2" href="#"> ORDER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link2" href="#">LOGOUT</a>
                    </li>
                  </ul>
            </div>

        </div>
    </nav>

    <style>
        li{
            padding: 12px;
        }
        .nav-item a{
            color:yellow;
            text-decoration: none;
            background-color: transparent;
            hover:blue;

        }
        .nav-item a:hover{
            color:rgb(253, 62, 14);
        }
      </style>

</body>
</html>
