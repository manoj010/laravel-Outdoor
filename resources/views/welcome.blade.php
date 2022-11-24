<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <p class="text-center h1 p-3">Outdoor</p>
    <div>
        <form action="{{route('addData')}}" method="post">
            @csrf
            <input type="text" name="batch" placeholder="Enter Batch Number">
            <input type="text" name="quantity" placeholder="Enter Quantity">
            <input type="text" name="status" placeholder="Enter Status">
            <input type="text" name="remarks" placeholder="Enter Remarks">
            <button type="submit">Add</button>
        </form>
    </div>

    <div class="container p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Batch</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $sn = 1;
                @endphp
                @foreach($list as $value)
                <tr>
                    <td>{{$sn++}}</td>
                    <td>{{$value->batch}}</td>
                    <td>{{$value->quantity}}</td>
                    <td>{{$value->status}}</td>
                    <td>{{$value->remarks}}</td>
                    <td><button type="button" class="btn btn-primary btn-sm"><a class="text-decoration-none text-white" href="{{url('/edit/'.$value->id)}}">Edit</a></button></td>
                    <td><button type="button" class="btn btn-danger btn-sm"><a class="text-decoration-none text-white" href="{{url('/delete/'.$value->id)}}">Delete</a></button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>