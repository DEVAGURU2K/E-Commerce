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
                ADD CATEGORIES</a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">lOGOUT</a>
                </li>
              </ul>
        </div>
    </nav>
        <div class="container-categories">
            <button class="btn btn-success" type="click"  onclick="window.location= '{{route ('add')}}' ">ADD</button>
        </div>
        <div>
            <table  >
                    <th>CAG ID</th>
                    <th>CATGORIES NAME</th>
                    <th>ACTIONS</th>
                <tbody>
                    @foreach ($data as $datas )
                    <tr class="table-active">
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->categoriesname}}</td>
                        <td><button class="btn btn-warning" ><a href="{{route('edit',$datas->id)}}">EDIT</a></button></td>
                        <td><button class="btn btn-danger"><a href="{{route('delete',$datas->id)}}">DELETE</a></button></td>
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

</style>


</body>
</html>
