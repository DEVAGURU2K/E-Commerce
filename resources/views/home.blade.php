<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>HOME PAGE</title>
</head>
<body>
    <div class="header">
        <img src="{{URL:: asset('wallapaper/logo4.png')}}"  style="width:40px; background-color:blue" class="rounded-pill">
        {{-- <a href="{{route ('viewcart') }}" style="float:right;"><i class="fa" style="font-size:40px;color:orange;">&#xf07a;</i> <span id="count" class="badge badge-pill bg-danger">{{$totalcart}}</span></a> --}}
        <button  class="btn btn-warning" type="button "onclick="location.href='{{ route('viewcart') }}'" >ADD CART <span id="count" class="badge badge-pill bg-danger ml-5" style="width:25px;height:20px;"> {{$totalcart}}</span></button>
        <button  class="btn btn-warning" type="button "onclick="location.href='{{ route('login') }}'" >LOGIN</button>
    </div>
    <div>
        {{-- @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}

            </div>
        @endif --}}
    </div>

    <div class="row">
        <div class="container neu-1 ">
            <div class="col-4 ml-6">
                <div>
                    <br><button class="btn btn-primary m-3" id="filter">FILTER</button>
                <br>CATEGORIES
                <form>
                <select name="categories" id="category" >
                    @if (count($cag)>0)
                      @foreach ($cag as $cags)
                          <option value="{{$cags->id}}">{{$cags->categoriesname}}</option>
                      @endforeach
                    @endif

                   </select>

                 </div>
                <div>
                   <br>PRODUCT
                   <select id="product" style="width: 90px;">
                    </select>
                </div>


            </div>
        </div>

        <div class="col -8" id="productview">
            {{-- <pre>
            @php

            print_r($data);

            exit()
            @endphp
            </pre> --}}

            @foreach($data as $datas)
                    <div class="card d-inline-flex w-7 products" id="pfilter">
                        <div class="card-top ">
                            <img class="image-rounded " src="{{asset('public\image')}}/{{$datas->post}}" style="width:200px; height:200px;padding:10px;margin:20px" alt="Card image cap">
                            <h6>{{$datas->brandname}}</h6>
                            <h6>RS.{{$datas->price}}</h6>
                            <h6>MAX PRICE.<strike>{{$datas->maxprice}}</strike></h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('addcart',$datas->id)}}" >
                             @csrf
                              <input type="hidden" name="quantity" value="1" min="1" style="width:70px; marign-left:40px;"><br><br>
                              <button type="submit" id="addcart" class="btn btn-primary" style="width:250px; marign-left:20px;">ADDCART</button><br>
                            </form>
                              <br><button type="button" class="btn btn-warning" style="width:250px; marign-left:20px;">BUY</button><br>
                        </div>
                    </div>
            @endforeach


        </div>

    </div>
<style>
 *{
    margin: 0;
    padding: :0;
 }
 body {
    overflow-x: hidden; /* Hide scrollbars */
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
a{
    text-decoration: none;
}
.products{
    padding: 25px;
    width: 33%;
}
.display >div{
    display: inline-block;
}
.neu-1 {
        text-align: center;
        margin-top: 10px;
        margin-left: 10px;
        height: 350px;
        width: 250px;
        background: hsl(210, 6%, 93%);
        border-radius: 6px;
        box-shadow: -3px -3px 7px #ffffffb2,
         3px 3px 5px rgba(94, 104, 121, 0.945);
      }

</style>
<script>
    $(document).ready( function(){


       $("#category").on('change',function(){
         var category=$(this).val();
         console.log(category);

         $.ajax({
            type:'GET',
            url:"{{route('filter')}}",
            data:{category:category},
            success: function (response) {
                console.log(response.product);
                $("#product").empty();
                $.each(response.product,function(index,value){
                    $("#product").append
                    ('<option> '+value.productname+'</option>');
                 });
            }
         });
        });
    });
    // add cart to function
    // $("#addcart").on('click',function(){
    //      var category=$(this).val();
    //      $("#input")
    //      console.log(category);
    //      $.ajax({
    //         type:'GET',
    //         url:"{{route('filter')}}",
    //         data:{category:category},
    //         success: function (response) {
    //             console.log(response.product);
    //             $("#product").empty();
    //             $.each(response.product,function(index,value){
    //                 $("#product").append
    //                 ('<option> '+value.productname+'</option>');
    //              });
    //         }
    //      });
    //     });


        $('#filter').on('click', function(){
        var product=$("#product").val();
        console.log(product);
        $.ajax({
            type:'GET',
            url:"{{route('productfilter')}}",
            data:{product:product},
            success: function (response) {
                console.log(response.products);

                $("#productview").empty();
                $.each(response.products,function(index,datas){
                    $('#productview').append(
                        $("<div class='card d-inline-flex w-7 products'>"));
                            $('.card').append($("<div class='card-top' 'style='width: 18rem; min-height: 300px;'>"));
                            $('.card-top').append( $('<img>',{id:'theImg',  style:'width:200px; height:200px;padding:10px;margin:20px', src:'{{asset('public/image')}}/'+datas.post}));
                            $(".card-top").append(
                                 "<h6>"+datas.brandname+"</h6>"+
                                 "<h6>"+datas.price+"</h6>"+
                                 "<h6>"+"MAX PRICE"+"<del>"+datas.maxprice+"</del>"+"</h6>");
                            $('.card').append($("<div class='card-body' 'style='width: 18rem; min-height: 300px;'>"));
                                  $(".card-body").append( $("<form>",{method:'POST',class:'forms',action:'{{url('addcart')}}/'+datas.id}));
                                  $(".forms").append(
                                   "<input type='hidden' name='_token' id='csrf-token' value='{{ Session::token() }}' />"+
                                   "<input type='hidden' name='quantity' value='1' min='1' style='width:70px; marign-left:40px;''>"+"<br>"+"<br>"+
                                   "<button  class='btn btn-primary mb-3' style='width:220px; marign:20px; marign-left:20px;'> "+'ADDCART'+"</button>"+"<br>"+
                                   "<button class='btn btn-warning' style='width:220px; marign-left:20px;'> "+'BUY'+"</button>");
                            $("</div>");
                         $("</div>");

                });

            }    });
        });

</script>
</body>
</html>
