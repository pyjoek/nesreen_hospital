<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <td>STOCK ITEM</td>
                    <td>QUANTITY</td>
                    <td>PRICE</td>
                    <td>DELIVERY NUMBER</td>
                    <td>DATE RECIEVED</td>
                    <td>DATE SOLD</td>
                </tr>
            </thead>
            <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$data->stock_item}}</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->delivery_no}}</td>
                <td>{{$data->date_recieved}}</td>
                <td>{{$data->date_sold}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>