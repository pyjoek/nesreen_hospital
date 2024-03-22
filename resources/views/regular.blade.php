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
  <div id="regular">
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
        <th>Card Number</th>
        <th>Authorization Number</th>
        <th>Payment</th>
        <th>Date For Meeting</th>
        <th>Doctor's Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $data)
        <tr>
            <td>{{$data->fname}}</td>
            <td>{{$data->age}}</td>
            <td>{{$data->sex}}</td>
            <td>{{$data->occu}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->addr}}</td>
            <td>{{$data->cardn}}</td>
            <td>{{$data->authn}}</td>
            <td>{{$data->payment}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->docname}}</td>
            <td>
              <button class="btn btn-primary mb-2">Edit</button>
              <button class="btn btn-primary">Delete</button>
            </td>
            
            

        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
