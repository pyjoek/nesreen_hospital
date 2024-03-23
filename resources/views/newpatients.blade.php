<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APPOINTMENTS</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <nav class="navbar center bg-body-tertiary">
            <div class="container-fluid row">
                <img src="{{asset('logo.jpeg')}}"  height="70px" width="70px" alt="">
                <h1 class="col-sm-9" >Ithna - Asheri Charitable Polyclinic</h1>
                <a href="/logout"><button class="btn btn-primary">Logout</button></a>
            </div>
        </nav>
  <center><a href="/regular">Regular</a>
  <a href="/newpatients">New patient</a></center>
  <h2>LIST OF REQUEST MADE</h2>

  <!-- new patients -->
  <div id="newones">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Occupation</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Address</th>
        <th>Authorization Number</th>
        <th>Payment</th>
        <th>Date For Meeting</th>
        <th>Doctor's Name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers as $customer)
        <tr>
            <td>{{$customer->fname}}</td>
            <td>{{$customer->age}}</td>
            <td>{{$customer->sex}}</td>
            <td>{{$customer->occu}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->addr}}</td>
            <td>{{$customer->authn}}</td>
            <td>{{$customer->payment}}</td>
            <td>{{$customer->date}}</td>
            <td>{{$customer->docname}}</td>
            <td>
              <a href="/new-edit/{{$customer->id}}"><button class="btn btn-primary mb-2">Edit</button></a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
