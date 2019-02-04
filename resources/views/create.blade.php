
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
     
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Fill in appropraitely</h2><br/>
      <form method="post" action="{{url('details')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Phone">Phone Number:</label>
              <input type="number" class="form-control" name="phone">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="email" class="form-control" name="email">
            </div>
          </div>
            <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="address">Address:</label>
            <textarea type="text" class="form-control" name="address"></textarea>
          </div>
        </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="dob">dob:</label>
            <input type="text" class="form-control" name="dob">
          </div>
        </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">city:</label>
            <input type="text" class="form-control" name="city">
          </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>