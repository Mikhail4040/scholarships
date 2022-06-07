<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='{{route("web.index")}}'>About Website</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href='{{route("products.create")}}'>Add a scholarship</a></li>
      <li><a href="#">Delete a scholarships</a></li>
      <li><a href="#">Update a scholarships</a></li>
      <li><a href='{{route("products.index")}}'>Show scholarships</a></li>
    </ul>

  </div>
</nav>

<body>

<div class="container">
  <div class="card" style="width:400px">
    <div class="card-body">
      <h1 class="card-title">{{$product->name}}</h1>
      <h4 class="card-text">{{$product->description}}</h4>
      <hr>
      <h4>university Name is: {{$product->university_name}}</h4><br>

      <h4>Study Language is: {{$product->study_language}}</h4><br>

      <h4>Language Level is: {{$product->language_level}}</h4><br>

      <h4>Scholarship Duration is: {{$product->duration}} month</h4><br>

    

      <a href="https://www.youtube.com/" class="btn btn-primary">Register now</a>
    </div>
  </div>
  <br>
  



</body>
</html>