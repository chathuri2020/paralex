<html>
<head>
<title>Manage product</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
<div class = "card-panel teal lighten-2"><h3 style="text-align: center">Products</h3></div>


<div class = "card-panel center">
<div style="float: left">
<a class="btn-floating btn-large waves-effect waves-light red" href="{{url('/addnewproduct')}}"><i class="material-icons float-left green">add</i></a>
</div>
<br>
<table class="striped" style="margin-top: 50px">
<tr>
<th>Product Id</th>
<th>Product Name</th>
<th>Price</th>
<th>Category</th>
<th>&nbsp; </th>
</tr>
@foreach($products as $product)
<tr>
<td>{{ $product->id}}</td>
<td>{{ $product->product_name}}</td>
<td>{{ $product->price}}</td>
<td>{{ $product->category}}</td>

<td>
<div class="row"><div class="col">
<a href="{{url('product/'.$product->id.'/edit')}}"><button class="btn btn-small blue">Edit</button></a>
</div>
<div class="col">
<form method="POST" action="{{route('product.destroy',$product->id)}}">
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