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
        <form action = "/addpatient" method="post">@csrf
        <div class="form-group">
                <label for="exampleInputPassword1">Doctor</label>
                <input type="text" class="form-control" name="docname" id="exampleInputPassword1" value="{{$doctor->docname}}">
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Full Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="number" class="form-control" name="age" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter yor Age">
            </div>
            <div class="form-group">
                <label>Sex</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="maleRadio" value="male">
                    <label class="form-check-label" for="maleRadio">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="femaleRadio" value="female">
                    <label class="form-check-label" for="femaleRadio">Female</label>
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label for="exampleInputEmail1">Occupation</label>
                <input type="text" class="form-control" name="occu" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Occupation">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="addr" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Address">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Authorization Number</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="authn" aria-describedby="emailHelp" placeholder="Enter your Occupation">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date Intended</label>
                <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Occupation">
            </div>

<div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="selectOptions">Payment</label>
          <div class="input-group">
            <select class="form-control" name="payment" id="selectOptions">
              <option value="">Choose...</option>
                <option value="Strategy">Strategy</option>
                <option value="Assemble">Assemble</option>
                <option value="Chash">Chash</option>
                <option value="Jubilee">Jubilee</option>
                <option value="NHIF">NHIF</option>
            </select>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div><p>LIPA NO FOR CASH: 9987555</p></div>
            
            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>