<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="card mt-4 mb-3">
            <div class="card-header">
                Add Category
            </div>
            <div class="card-body">

                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control">
                    <button type="submit" class="btn btn-primary mt-2">Save</button>
                </form>
            </div>
        </div>
        <h2>Categories</h2>
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
            </tr>
            @foreach ($categories as $key => $category)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $category->id }}</th>
                    <th>{{ $category->name }}</th>
                    <th>{{ $category->created_at }}</th>
                </tr>
            @endforeach



        </table>
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>

</body>

</html>
