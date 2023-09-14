<html>

<head>
    <title>Edit Product</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card-panel teal lighten-2">
            <h3 style="text-align: center">Edit Product</h3>
        </div>


        <div class="card-panel center">
            <div class="row">
                <form class="col s12" method="POST" action="{{ route('product.update',$product->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s6">

                            <input id="name" type="text" class="validate" name="name" value="{{ $product->product_name }}">
                            <label for="name">Product Name</label>
                        </div>
                        <div class="input-field col s6">

                            <input id="price" type="tel" class="validate" name="price" value="{{ $product->price }}">
                            <label for="Price">Price</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">

                            <select class="form-select" aria-label="Default select example" name="category">
                                @foreach($send as $category)

                                <option value="{{ $category->category_id}}">{{ $category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <input type="submit" name="submit" class="btn blue right" value="Update">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>

</html>