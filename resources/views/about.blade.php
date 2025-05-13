<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>About us</h2>

    <h2>{{ $name }}</h2>

    <a href="/contact/3344444/ali@gmail.com">Go to contact</a> <br>
    <a href="{{ route('contact_index',['contact' => 3434343, 'email' => 'ali@gmail.com']) }}">Got to Contact by Name</a>
</body>
</html>