<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <div class="container mt-5">
      <!-- Content for the right side goes here -->
      <h2>Stock Information</h2>
      <h2>Vita Store Branch 14</h2>

      <table id="stock-table" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>STOCK ITEM</th>
            <th>QUANTITY</th>
            <th>DELIVERY NUMBER</th>
            <th>DATE DELIVERED</th>
            <th>DATE RECIEVED</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data)
            <tr>
                <td>{{$data->stock_item}}</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->delivery_no}}</td>
                <td>{{$data->date_delivered}}</td>
                <td>{{$data->date_recieved}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>