<html>
<head>
<title>Mange category</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
<div class = "card-panel teal lighten-2"><h3 style="text-align: center">Category</h3></div>


<div class = "card-panel center">
<div style="float: left">
<a class="btn-floating btn-large waves-effect waves-light red" href="{{url('category/create')}}"><i class="material-icons float-left green">add</i></a>
</div>
<br>
<table class="striped" style="margin-top: 50px">
<tr>
<th>Category Id</th>
<th>Category Name</th>
</tr>
@foreach($categories as $category)
<tr>
<td>{{ $category->category_id}}</td>
<td>{{ $category->category_name}}</td>

<td>
<div class="row"><div class="col">
<a href="{{url('category/'.$category->category_id.'/edit')}}"><button class="btn btn-small blue">Edit</button></a>
</div>
<div class="col">
<form method="POST" action="{{route('category.destroy',$category->category_id)}}">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-small red">Delete</button>
</form>
</div>
</div>
</td>
</tr>
@endforeach
</tabel>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>