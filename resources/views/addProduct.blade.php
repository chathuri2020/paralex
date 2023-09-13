<html>

<head>
  <title>CRUD Application</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <div class="card-panel teal lighten-2">
      <h3 style="text-align: center">Add New Product</h3>
    </div>


    <div class="card-panel center">
      <div class="row">
        <form class="col s12" method="POST" action="{{url('/product')}}">
          @csrf
          <div class="row">
            <div class="input-field col s6">

              <input id="productname" type="text" class="validate" name="productname">
              <label for="productname">Product Name</label>
            </div>

            <div class="input-field col s6">

              <input id="price" type="text" class="validate" name="price">
              <label for="price">Price</label>
            </div>
          </div>
          <div class="row">

            <div class="col-md-2">
              <select class="form-select" aria-label="Default select example" name="category">
                @foreach($send as $category)

                <option value="{{ $category->category_id}}">{{ $category->category_name}}</option>
                @endforeach
              </select>
            </div>

          </div>
          <input type="submit" name="submit" class="btn blue right" value="Save">
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>

</html>