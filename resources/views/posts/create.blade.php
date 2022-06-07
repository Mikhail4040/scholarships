<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='{{route("web.index")}}'>About Website</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href='{{route("posts.create")}}'>Add a scholarship</a></li>
      <li><a href='{{route("delete")}}'>Delete a scholarships</a></li>
      <li><a href='{{route("update")}}'>Update a scholarships</a></li>
      <li><a href='{{route("posts.index")}}'>Show scholarships</a></li>
      <li><a href="{{ route('logout') }}">Log Out</a></li>
    </ul>

  </div>
</nav>
<div class="container mt-3">
  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1 style="color:orange;">Welcome {{Auth::user()->name}}</h1> 
    <p>Here you can post a scholarship..</p> 
  </div>
</div>
    
<form action='{{route("posts.store")}}' method="post">
    @csrf
    <fieldset style=" margin: 5px; background-color: #eeeeee">
      <legend style="background-color: gray; color: white;padding: 5px 10px;">
      Enter some scholarship information
    </legend>
    <div class='form-group'>
    <label for="fname">Scholarship Name:</label><br>
  <input type="text" id="fname" name="name" placeholder="Enter the scholarship name" class="form-control form-control-lg"  ><br>
    </div>
  
    <div class='form-group'>
    <label for="lname">Description:</label><br>
  <input type="text" id="lname" name="description" placeholder="Enter a simple description" class="form-control form-control-lg"class="form-control form-control-lg"><br>
    </div>

    <div class='form-group'>
    <label for="lname">University Name:</label><br>
  <input type="text" id="lname" name="university_name"  placeholder="Enter university name" class="form-control form-control-lg"class="form-control form-control-lg"><br>
    </div>

   <div class='form-group'>
   <label for="lname">Study language:</label><br>
  <input type="text" id="lname" name="study_language"  placeholder="Enter a study language" class="form-control form-control-lg"class="form-control form-control-lg"><br>
   </div>
 

    <div class="form-group">
    <label for="exampleFormControlSelect2">language level:</label>
    <select multiple class="form-control" id="exampleFormControlSelect2" name="language_level">
      <option>A1</option>
      <option>A2</option>
      <option>B1</option>
      <option>B2</option>
      <option>C1</option>
      <option>C2</option>
    </select>
  </div>



    <div class='form-group'>
    <label for="lname">The link:</label><br>
  <input type="url" id="lname" name="duration">
    </div>


  




    <div class='form-group'>
    <input type="reset" style=" background-color: white; color: black; border: 2px solid red;">
    <button type='submite' style=" background-color: white; color: black; border: 2px solid #4CAF50;">Post</button>
  </div>
  </fieldset>
  





  
</body>
</html>


</body>
</html>