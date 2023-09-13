<html>
    <head>
        <title>CRUD Application</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <div class = "card-panel teal lighten-2"><h3 style="text-align: center">Add New Category</h3></div>


        <div class = "card-panel center">
              <div class="row">
                <form class="col s12" method="POST" action="{{url('/category')}}">
                    @csrf
                  <div class="row">
                    <div class="input-field col s6">
                      
                      <input id="categoryname" type="text" class="validate" name="category">
                      <label for="firstname">Category Name</label>
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