<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>City</th>
        <th>address</th>
        <th>dob</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach($details as $detail)
      <tr>
        <td>{{$detail['id']}}</td>
        <td>{{$detail['name']}}</td>
        
        <td>{{$detail['phone']}}</td>
        <td>{{$detail['email']}}</td>
        <td>{{$detail['city']}}</td>
         <td>{{$detail['address']}}</td>
          <td>{{$detail['dob']}}</td>

        <td><a href="{{action('DetailController@edit', $detail['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('DetailController@destroy', $detail['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
  <a href="{{url('/')}}" class="btn btn-secondary">Go Back</a>
  </div>
  </body>
</html>