<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
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
    <h1>Update Page</h1>
<form action="{{route("products.update",$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class='form-group'>
    <label for="fname">Update:</label><br>
  <input type="text" id="fname" name="name" value="{{$product->name}}"><br>
    </div>
  
    <div class='form-group'>
    <label for="lname">description:</label><br>
  <input type="text" id="lname" name="description" value="{{$product->description}}"><br>
    </div>

   <div class='form-group'>
   <label for="lname">university_name:</label><br>
  <input type="text" id="lname" name="university_name" value="{{$product->university_name}}"<br>
   </div>

   <div class='form-group'>
   <label for="lname">study_language:</label><br>
  <input type="text" id="lname" name="study_language" value="{{$product->study_language}}"<br>
   </div>

   <div class='form-group'>
   <label for="lname">university_name:</label><br>
  <input type="text" id="lname" name="language_level" value="{{$product->language_level}}"<br>
   </div>

   <div class='form-group'>
   <label for="lname">university_name:</label><br>
  <input type="text" id="lname" name="duration" value="{{$product->duration}}"<br>
   </div>
  <div class='form-group'>
    <button type='submite'>Update Now!</button>
  </div>
  
</form> 


</body>
</html>