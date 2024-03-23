<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome App</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS styles here -->
    <style>
        .product-row {
            margin-bottom: 20px;
        }
        .container{
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar center bg-body-tertiary">
            <div class="container-fluid row">
                <img src="{{asset('logo.jpeg')}}"  height="70px" width="70px" alt="">
                <h1 class="col-sm-9" >Ithna - Asheri Charitable Polyclinic</h1>
                <a href="/login"><button class="btn btn-primary">Login</button></a>
            </div>
        </nav>
        <center>
            <div class="container-fluid"><h3>Make A Doctor Appointment</h3></div>
        </center>
        <div class="row">
            @foreach ($doctors as $doctor)
            <div class="col-md-6 product-row"> <!-- Add product-row class to each column -->
                <div class="card"><a href = "/register1/{{$doctor -> id}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $doctor->docname }}</h5>
                        <p class="card-text">{{ $doctor->level }}</p>
                    </div></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>