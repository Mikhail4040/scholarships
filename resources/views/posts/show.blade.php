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
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <style>
    
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>




</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='{{route("web.index")}}'>About Website</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href='{{route("posts.create")}}'>Add a scholarship</a></li>
      <li><a href='{{route("delete")}}'>Delete a scholarships</a></li>
      <li><a href='{{route("update")}}'>Update a scholarships</a></li>
      <li><a href='{{route("posts.index")}}'>Show scholarships</a></li>
      <li><a href="{{ route('logout') }}">Log Out</a></li>
    </ul>

  </div>
</nav>

<body style="background-color:red;">
<div class="container" >
  <div class="card" style="width:400px;">
    <div class="card-body">
    <i class='fas fa-user-circle' style='font-size:48px;color:red'></i>
      <h1 class="card-title" style="font-weight: bold;">{{$posts->name}}</h1>
      <h1></h1>
      <h4 class="card-text" style="font-weight: normal; color:blue;">{{$posts->description}}</h4>
      <hr>
      <i class='fas fa-hotel' style='font-size:48px;color:red'></i>
      <h4 style="font-weight: bold;">university Name is:</h4>
      <h4  style="font-variant: small-caps;">{{$posts->university_name}}</h4><br>

      <hr>
      <i class='far fa-comment-alt' style='font-size:48px;color:red'></i>
      <h4 style="font-weight: bold;">Study Language is:</h4>
      <h4 style="font-variant: small-caps;">{{$posts->study_language}}</h4>

       <hr>
       <i class="fa fa-line-chart" style="font-size:48px;color:red"></i>
      <h4 style="font-weight: bold;">Language Level is:</h4>
      <h4 style="font-variant: small-caps;">{{$posts->language_level}}</h4>

       <hr>
       <i class='far fa-clock' style='font-size:48px;color:red'></i>
      <h4  style="font-weight: bold;">Scholarship Duration is:</h4>
      <h4  style="font-variant: small-caps;">12 month and it is fully funded</h4>

    
       <h6>for more details</h6>
      <a href="https://www.youtube.com/" class="btn btn-primary">Scholarship site</a>
    </div>
  </div>
  <br>
  







</body>
</html>