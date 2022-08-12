<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset ('/css/style.css') }}">
    <title>REGISTRATION FORM</title>
</head>
<body>
    <form action="{{ route ('insertregistration')}}" method="post">
        @csrf
        <div class="container">
          <div class="mb-3">
              <label for="username"><b>Username</b></label><br>
              <input type="text" placeholder="Enter username" name="username" id="email" required><br>
          </div>
          <div class="mb-3">
              <label for="email"><b>Email</b></label><br>
              <input type="text" placeholder="Enter  Email" name="email" id="email" required><br>
          </div>
          <div class="mb-3">
            <label for="email"><b>MobileNumber</b></label><br>
            <input type="text" placeholder="Enter  Email" name="mobilephone" id="mobilephone" required><br>
          </div>
          <div class="mb-3">
            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required><br>
          </div>
          <div class="mb-3">
             <label for="psw-repeat"><b>Repeat Password</b></label><br>
             <input type="password" placeholder="Repeat Password" name="conformpassword" id="psw-repeat" required><br>
          </div>
          <button type="submit">SIGN UP</button><br>


      </form>

</body>
</html>
