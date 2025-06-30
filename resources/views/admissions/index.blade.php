<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admissions</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    
    <div class="container">
        <h2 class="mt-3">Admission list</h2>
        <table class="table table-bordered table-hover">
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                
            </tr>
            @foreach ($admissions as $key => $admission)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $admission->id }}</td>
                    <td>{{ $admission->name }}</td>
                    <td>{{ $admission->father_name }}</td>
                    <td>{{ $admission->email }}</td>
                    <td>{{ $admission->phone }}</td>
                    <td>{{ $admission->address }}</td>
                </tr>
            @endforeach
            
        </table>
    </div>
    
</body>
</html>