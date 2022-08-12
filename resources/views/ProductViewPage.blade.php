<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>PRODUCT VIEW PAGE</title>
</head>
<body>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="{{$form->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$form->heading}}</h5>
              <p class="card-text">{{$form->text}}</p>
              <a href="#" class="btn btn-primary"> Go somewhere</a>
            </div>
          </div>
      </div>

</body>
</html>
