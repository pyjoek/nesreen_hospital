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
  <a href="/regular">Regular</a>
  <a href="/newpatients">New patient</a>
  <a href="/logout">logout</a>
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
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
