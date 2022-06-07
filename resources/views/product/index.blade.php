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
      <li class="active"><a href='{{route("products.create")}}'>Add a scholarship</a></li>
      <li><a href="#">Delete a scholarships</a></li>
      <li><a href="#">Update a scholarships</a></li>
      <li><a href='{{route("products.index")}}'>Show scholarships</a></li>
    </ul>

  </div>
</nav>








<table  class="table table-condensed">
  @php
   $i=0;
  @endphp
  <tr>
  <th>id</th>
    <th>Scholarship Name</th>
    <th>University Name</th>
    <th>Study language</th>
    <th>Details</th>
  </tr>
  @foreach($product as $item)
  <tr>
    <th scope="row">{{++$i}}</th>
    <td>{{$item->name}}</td>
    <td>{{$item->university_name}}</td>
    <td>{{$item->study_language}}</td>    
    <td>
      <form action="{{route("products.edit",$item->id)}}">
      <button type='submite' class='btn btn-danger'>Edit</button>
      </form>

      <form action="{{route("products.show",$item->id)}}">
      <button type='submite' class='btn btn-danger'>Show</button>
      </form>
     
  

      <form action="{{ route("products.destroy",$item->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type='submite' class='btn btn-danger'>Delete</button>
      </form>
    </td>
  </tr>

  @endforeach

</table>

</body>
</html>