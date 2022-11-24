<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor</title>
</head>
<body>
    <h1>Outdoor</h1>
    <div>
        <form action="{{route('updateData')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <input type="text" name="batch" value="{{$data->batch}}" placeholder="Enter Batch Number">
            <input type="text" name="quantity" value="{{$data->quantity}}" placeholder="Enter Quantity">
            <input type="text" name="status" value="{{$data->status}}" placeholder="Enter Status">
            <input type="text" name="remarks" value="{{$data->remarks}}" placeholder="Enter Remarks">
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>