<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>ADD PRODUCT</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL:: asset('wallapaper/man.png')}}"  style="width:50px;" class="rounded-pill">
                ADD  NEW PRODUCT</a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">lOGOUT</a>
                </li>
              </ul>
        </div>
    </nav>
    <form action="{{route('updateproduct',($data->id))}}"  enctype="multipart/form-data"  method="post">
        @csrf
        <div class="container">
          <h1>ADD NEW PRODUCT</h1>

          <label><b>CATEGORIES</b></label><br>
          <select name='cagid'>
            @foreach($cag as $cags)
            <option value="{{$cags->id}}">{{$cags->categoriesname}}</option>
            @endforeach
          </select>
          {{-- <input type="text" placeholder="Enter product name" name="email" required><br> --}}

          <label for="psw"><b>PRODUCT NAME</b></label><br>
          <input type="text" placeholder="Enter the product name" name="productname"  value="{{$data->productname}}"required><br>

          <label for="psw-repeat"><b>BRAND NAME</b></label><br>
          <input type="text" placeholder="Enter the brand name" name="brandname" value="{{$data->brandname}}" required><br>

          <label for="psw-repeat"><b>PRICE</b></label><br>
          <input type="text" placeholder="Enter the selling price" name="price"  value="{{$data->price}}"required><br>

          <label for="psw-repeat"><b>MAXIMUM PRICE</b></label><br>
          <input type="text" placeholder="Enter the selling price" name="maximumprice" value="{{$data->maxprice}}" required><br><br>


          <input type="file"  name="file" required />
          <img alt="{{$data->post}}" style="max-width: 60px;"><br>

          <button type="submit" class="btn btn-primary">UPDATE</button><br>
          </div>
        </div>
      </form>

<style>
.container{
    width:450px;
    height:450px;
    border-radius: 6px;
    background-color:black;
    margin-top:60px;
    color:white;
}
.container input{
    width:300px;
    margin-left : 20px;
}
.container h1 {
   marign-left: 20px;
}
.container button{
    margin-left: 160px;
}
.container select{
    width:300px;
    margin-left : 20px;
}
</style>
</body>
</html>
