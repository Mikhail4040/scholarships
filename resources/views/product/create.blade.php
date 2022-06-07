<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

    
<form action='{{route("products.store")}}' method="post">
    @csrf
    <div class='form-group'>
    <label for="fname">Scholarship Name:</label><br>
  <input type="text" id="fname" name="name"><br>
    </div>
  
    <div class='form-group'>
    <label for="lname">Description:</label><br>
  <input type="text" id="lname" name="description"><br>
    </div>

    <div class='form-group'>
    <label for="lname">University Name:</label><br>
  <input type="text" id="lname" name="university_name"><br>
    </div>

   <div class='form-group'>
   <label for="lname">Study language:</label><br>
  <input type="text" id="lname" name="study_language"><br>
   </div>
 

  <div class='form-group'>
    <label for="lname">language level:</label><br>
  <input type="text" id="lname" name="language_level"><br>
    </div>

    <div class='form-group'>
    <label for="lname">Duration:</label><br>
  <input type="text" id="lname" name="duration"><p>Month</p>
    </div>


   


    <div class='form-group'>
    <button type='submite'>Save</button>
  </div>
  

</body>
</html>