<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL:: asset('wallapaper/man.png')}}"  style="width:50px;" class="rounded-pill">
                ADD  NEW CATEGORIES</a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">lOGOUT</a>
                </li>
              </ul>
        </div>
    </nav>
    <form  action="{{route('addcag')}}" method="post">
        @csrf
        <div class="add-form">
            <h3>ADD CATEGORIES FORM</h3>
            <label> <b>ADD CATEGORIES NAME: </b> </label><br><br>
            <input type="text" class="form-control" placeholder="Enter the New categories field" name= "newcag"><br><br>
            <button class="btn btn-success" >ADD</button>
        </div>
    </form>

<style>
.add-form{
    width:450px;
    color :white;
    border-radius: 10px;
    margin-top:  50px;
    margin-left:370px;
    height: 270px;
    background-color:black;
}
.add-form label{
    margin-left: 20px;
}
.add-form input{
    width:250px;
    margin-left: 30px;
    border-radius: 3px;
}
.add-form button{
    margin-left: 120px;
}
.add-form h3{
    margin-left: 10px;
}
</style>

</body>
</html>
