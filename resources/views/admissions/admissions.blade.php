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
        <form action="{{ route('query') }}" method="get">

            <input type="text" class="form-control mb-3" name="search" value="{{ request()->get('search') }}"
                placeholder="Search by name...">
            <button class="btn btn-primary">Search</button>
            @if (request()->get('search'))
                <a href="{{ route('query') }}" class="btn btn-warning">clear</a>
            @endif
        </form>

        <hr>
        <h2>Joined Data</h2>
        <table class="table table-bordered table-hover">
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Admission Name</th>
                <th>Student Name</th>
                <th>Class</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Fee</th>
                <th>Address</th>

            </tr>
            @foreach ($joinedData as $key => $admission)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $admission->id }}</td>
                    <td>{{ $admission->name }}</td>
                    <td>{{ $admission->student->name }} </td>
                    <td>{{ $admission->class }}</td>
                    <td>{{ $admission->father_name }}</td>
                    <td>{{ $admission->email }}</td>
                    <td>{{ $admission->phone }}</td>
                    <td>{{ $admission->fee }}</td>
                    <td>{{ $admission->address }}</td>
                </tr>
            @endforeach

        </table>

        @foreach ($posts as $key => $post)
            <h3>{{ $post->title }}</h3>
            <ul>
                @foreach ($post->comments as $key => $comment)
                    <li>{{ $comment->comment }}</li>
                @endforeach
            </ul>
        @endforeach

        {{-- {{ $joinedData->links('pagination::bootstrap-5') }} --}}

    </div>

</body>

</html>
