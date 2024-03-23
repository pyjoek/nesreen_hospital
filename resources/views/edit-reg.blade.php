<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action = "/update/regular/{{$datas->id}}" method = "post">@csrf
        <div class="form-group">
                <label for="exampleInputPassword1">Doctor</label>
                <input type="text" name="docname" class="form-control" readonly id="exampleInputPassword1" value="{{$datas->docname}}">
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" name="fname" class="form-control" value="{{$datas->fname}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Full Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="number" name="age" class="form-control" value="{{$datas->age}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter yor Age">
            </div>
            <div class="form-group">
    <label>Sex</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sex" value="{{$datas->sex}}" id="maleRadio" value="male">
        <label class="form-check-label" for="maleRadio">Male</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sex" value="{{$datas->sex}}" id="femaleRadio" value="female">
        <label class="form-check-label" for="femaleRadio">Female</label>
    </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Occupation</label>
                <input type="text" name="occu" class="form-control" value="{{$datas->occu}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Occupation">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" name="addr" class="form-control" value="{{$datas->addr}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Address">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date Intended</label>
                <input type="date" name="date" class="form-control" value="{{$datas->date}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Occupation">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="number" name="phone"  class="form-control" value="{{$datas->phone}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="{{$datas->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Card Number</label>
                <input type="text" name="cardn" class="form-control" value="{{$datas->cardn}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Occupation">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Authorization Number</label>
                <input type="number" name="authn" class="form-control" value="{{$datas->authn}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Occupation">
            </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="selectOptions">Payment</label>
          <div class="input-group">
            <select class="form-control" value="{{$datas->fname}}"  name="payment" id="selectOptions">
              <option value="">Choose...</option>
              <option value="Strategy" <?php if($datas->payment == 'Strategy') echo 'selected';?>>Strategy</option>
                <option value="Assemble" <?php if($datas->payment == 'Assemble') echo 'selected';?>>Assemble</option>
                <option value="Cash" <?php if($datas->payment == 'Cash') echo 'selected';?>>Cash</option>
                <option value="Jubilee" <?php if($datas->payment == 'Jubilee') echo 'selected';?>>Jubilee</option>
                <option value="NHIF" <?php if($datas->payment == 'NHIF') echo 'selected';?>>NHIF</option>
            </select>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            
            
        </form><br><br>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>