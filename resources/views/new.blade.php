<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <main class="container mt-5">
    <nav class="navbar center bg-body-tertiary">
            <div class="container-fluid row">
                <img src="{{asset('logo.jpeg')}}"  height="70px" width="70px" alt="">
                <h1 class="col-sm-9" >Ithna - Asheri Charitable Polyclinic</h1>
                <a href="/logout"><button class="btn btn-primary">Logout</button></a>
            </div>
        </nav>
        <form action="/new-doc" method="post">@csrf
            <label for="for docname">Doctor's Name</label>
            <input type="text" name="docname" class="form-control" placeholder="Enter Doctor's name">
            <label for="for docname">Doctor's Name</label>
            <input type="text" name="level" class="form-control" placeholder="level"><br>
            <input type="submit" value="Add" class="btn btn-primary">
        </form>
    </main>
</body>
</html>