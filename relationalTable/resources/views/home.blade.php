<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dept as $d)
                <tr>
                    <td><a href="{{route('dept.info',['department_id'=>$d->department_id])}}">{{$d->d_name}}</a></td>
                </tr> 
            @endforeach
        </tbody>
    </table>
</body>
</html>