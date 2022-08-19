<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>ADD CART</title>
</head>
<body>
    @php
        global $amount;
    @endphp
    <div class="header">
        <img src="{{URL:: asset('wallapaper/logo4.png')}}"  style="width:40px; background-color:blue" class="rounded-pill">

        <button  class="btn btn-warning" type="button "onclick="location.href='{{ route('login') }}'" >LOGIN</button>
        <button class="btn btn-warning"> <a href="{{url('/')}}">HOME</a></button>
      {{-- <button href="{{ route('/login') }}"> LOGIN  </button> --}}
    </div>
    <div class="container-fluid">
        <div class="grid">
            <div class="row">
                <div class="col col-xl-8">
                    <div class="mt-3" >
                        <table class="table text-center mytable" >
                                <th>PRODUCT_NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>PRODUCTIMAGE</th>
                                <th>TOTAL</th>
                                <th>ACTIONS</th>
                            <tbody>
                                @foreach($data as $datas)
                                <tr class="table-data">

                                    <td>{{$datas->productname}}</td>
                                    <td>{{$datas->price}}</td>
                                    <td>
                                        <button class="btn btn-increase" onclick="location.href='{{ url('/increasequantity',$datas->id) }}'">+</button>
                                        <input type="number"  minvalue='1' value="{{$datas->quantity}}" min="1" style="width:50px;  -moz-appearance: textfield; ">
                                        <button class="btn btn-reduce" onclick="location.href='{{ url('/decreasequantity',$datas->id) }}'">-</button>
                                    </td>
                                    <td><img src="{{asset('public\image')}}/{{$datas->productimage}}" style="width:140px;height:110px;" ></td>
                                    <td>{{$datas->price*$datas->quantity}}</td>
                                    <td><button class="btn btn-danger mybutton" ><a href="{{route('deletecart',$datas->id)}}">REMOVE</a></button></td>

                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                        <button  onclick="location.href='{{ url('/stripe') }}'" class="btn btn-success ml-6" style="width:600px;">CHECKOUT</button>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="card mycard" style="width: 30rem;">
                        <div class="card-header">
                            <h6 class="text-center">Price Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid">
                                <div class="row">
                                    @php
                                    $table = 0;
                                    $amount = 0;
                                    @endphp
                                    @foreach ($data as $datas)
                                    <div class="col col-md-3">
                                        {{$datas->productname}}
                                    </div>
                                    <div class="col col-md-3">
                                        ({{($datas->quantity)}})item
                                    </div>
                                    <div class="col col-md-3">
                                        {{($datas->price)}}
                                    </div>
                                    <div class="col col-md-3">
                                        {{$total=$datas->price*$datas->quantity}}
                                    </div>
                                         @php
                                             $amount=$amount+$total;
                                         @endphp
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="grid">
                                <div class="row">
                                    <div class="col col-md-6">
                                        TOTAL AMOUNT
                                    </div>
                                    <div class="col col-md-3"></div>
                                    <div class="col col-md-3">
                                        RS. {{$amount}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
<style>
    a{
        text-decoration: none;
        text-emphasis: none;
    }
    .table-data{
        width:100px;
    }

    .header{
    height:50px;
    width:100%;
    color:blue;
    background-color: blue;
}
.header button{
 float:right;
 margin-top:10px;
 height: 30px;
 margin-right: 10px;


}
.totalbutton{
    width:200px;
    height:50px;
    margin-right: 10px;
    float:right;

}
.mytable{
    width:90%;
    margin:10px auto;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.mycard{
    margin: 50px;
    margin-left: -50px;
}

</style>
</body>
</html>
