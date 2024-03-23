<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APPOINTMENTS</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .con{
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="con">
        <nav class="navbar center bg-body-tertiary">
            <div class="container-fluid row">
                <img src="{{asset('logo.jpeg')}}"  height="70px" width="70px" alt="">
                <h1 class="col-sm-9" >Ithna - Asheri Charitable Polyclinic</h1>
                <a href="/logout"><button class="btn btn-primary">Logout</button></a>
            </div>
        </nav>
  <center>
    <a href="/regular">Regular</a>
    <a href="/newpatients">New patient</a>
  </center>

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
        <th></th>
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
              <a href="/regular-edit/{{$data->id}}"><button class="btn btn-primary mb-2">Edit</button></a>
            </td>
            
            

        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
