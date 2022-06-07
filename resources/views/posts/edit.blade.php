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
      <li><a href='{{route("posts.create")}}'>Add a scholarship</a></li>
      <li><a href='{{route("delete")}}'>Delete a scholarships</a></li>
      <li><a href='{{route("update")}}'>Update a scholarships</a></li>
      <li><a href='{{route("posts.index")}}'>Show scholarships</a></li>
      <li><a href="{{ route('logout') }}">Log Out</a></li>
    </ul>

  </div>
</nav>
<form action="{{route("posts.update",$posts->id)}}" method="POST">
    @csrf
    @method('PUT')
    <fieldset style=" margin: 5px; background-color: #eeeeee">
      <legend style="background-color: gray; color: pink;padding: 5px 10px;">
      Update Page
    </legend>
    <div class='form-group'>
    <label for="fname">Scholarship Name::</label><br>
  <input type="text" id="fname" name="name" value="{{$posts->name}}"><br>
    </div>
  
    <div class='form-group'>
    <label for="lname">Description:</label><br>
  <input type="text" id="lname" name="description" value="{{$posts->description}}"><br>
    </div>

   <div class='form-group'>
   <label for="lname">University Name:</label><br>
  <input type="text" id="lname" name="university_name" value="{{$posts->university_name}}"<br>
   </div>

   <div class='form-group'>
   <label for="lname">Study language:</label><br>
  <input type="text" id="lname" name="study_language" value="{{$posts->study_language}}"<br>
   </div>

   <div class='form-group'>
   <label for="lname">Language Level:</label><br>
  <input type="text" id="lname" name="language_level" value="{{$posts->language_level}}"<br>
   </div>

   <div class='form-group'>
   <label for="lname">The Link:</label><br>
  <input type="url" id="lname" name="duration" value="{{$posts->duration}}"<br>
   </div>
  <div class='form-group'>
    <button type='submite'>Update Now!</button>
  </div>

  
</form> 


</body>
</html>