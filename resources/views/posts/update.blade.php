<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
      <li ><a href='{{route("posts.create")}}'>Add a scholarship</a></li>
      <li><a href='{{route("delete")}}'>Delete a scholarships</a></li>
      <li class="active"><a href='{{route("update")}}'>Update a scholarships</a></li>
      <li><a href='{{route("posts.index")}}'>Show scholarships</a></li>
      <li><a href="{{ route('logout') }}">Log Out</a></li>
    </ul>

  </div>
</nav>


<div class="container mt-3">
  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1 style="color:orange;">Welcome {{Auth::user()->name}}</h1> 
    <p>Here you can Update a scholarship..</p> 
  </div>
</div>

@if($posts->count()>0)
<table  class="table table-condensed" style="  border: 4px solid black; ">
  @php
   $i=0;
  @endphp
  <tr>
  <th style=" background-color: pink;">id</th>
    <th style=" background-color: pink;">Scholarship Name</th>
    <th style=" background-color: pink;">University Name</th>
    <th style=" background-color: pink;">Study language</th>
    <th style=" background-color: pink;">Details</th>
  </tr>
  @foreach($posts as $item)
  @if($item->user_id==Auth::id())
  <tr>
    <th scope="row">{{++$i}}</th>
    <td>{{$item->name}}</td>
    <td>{{$item->university_name}}</td>
    <td>{{$item->study_language}}</td>    
    <td>
    
  

    <form action="{{route("posts.edit",$item->id)}}">
      <button type='submite' class='btn btn-danger'>Edit</button>
      </form>
      


    </td>
  </tr>
  @endif

  @endforeach

</table>
    
@else
<h1>No things</h1>

@endif

<div class="container mt-3">
 
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>


</body>
</html>