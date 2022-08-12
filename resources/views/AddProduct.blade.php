<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>ADD CATEGORIES</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL:: asset('wallapaper/man.png')}}"  style="width:50px;" class="rounded-pill">
                 PRODUCT PAGE</a>
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CATEGORIES</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/adminlogin')}}">lOGOUT</a>
                </li>
              </ul>
        </div>
    </nav>
        <div class="container-categories">
            <button class="btn btn-success" type="click"  onclick="window.location= '{{route ('addnewproduct')}}' ">ADD</button>
        </div>
        <div>
            <table  style=" border-collapse: separate ">
                    <th>PRD_ID</th>
                    <th>CATGORIES_NAME</th>
                    <th>PRODUCT_NAME</th>
                    <th>BRAND_NAME</th>
                    <th>PRICE</th>
                    <th>MAXIMUM_PRICE</th>
                    <th>POST</th>
                    <th>ACTIONS</th>
                <tbody>
                    @foreach ($data as $datas )
                    <tr class="table-active">
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->categories_name}}</td>
                        <td>{{$datas->productname}}</td>
                        <td>{{$datas->brandname}}</td>
                        <td>{{$datas->price}}</td>
                        <td>{{$datas->maxprice}}</td>
                        <td><img src="{{asset('public\image')}}/{{$datas->post}}" style="max-width: 40px;" ></td>
                        <td><button class="btn btn-warning" ><a href="{{route('prdedit',$datas->id)}}">EDIT</a></button></td>
                        <td><button class="btn btn-danger"><a href="{{route('prddelete',$datas->id)}}">DELETE</a></button></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

<style>

.container-categories button{
      margin-top: 40px;
      margin-left: 30px;
      width:100px;

}
a{
    text-decoration: none;

}

table{
    margin-top: 50px;
    width:500px;
}
a:hover{
    color:rgb(253, 62, 14);
}
.navbar-nav a{
    color:yellow;
}

</style>


</body>
</html>
