<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>{{$product}}</h2>
</body>

                    $("#productview").append(
                        "<h6>"+datas.brandname+"</h6>"+
                            "<h6>"+datas.price+"</h6>"+
                            "<h6>"+"MAX PRICE"+"<del>"+datas.maxprice+"</del>"+"</h6>");
                            {{-- $("#productview").empty();
                            hell(data){
                                  $.ajax({
                                    type:'GET',
                                    url:"{{route('filtercart')}}",
                                    data:{product:data},
                                });
                            } --}}
