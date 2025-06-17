<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('menu')

    <button style="background:green;border:1px solid black; padding:8px">Primary Button</button>
     
    <h1>My page</h1>

    <h2>Name is: {{ $name }}</h2>
    <h2>Age is: {{ $age }}</h2>
    <h1>data : {{ $data['email'] }}</h1>

    <h1>
        @if ($age > 20)
            {{ $name }} is older than 20
        @elseif($age == 20)
            {{ $name }} is exactly 20 years old
        @else
            {{ $name }} is younger than 20
        @endif



    </h1>

    <h1>
        @switch($age)
            @case(30)
                {{ $name }} is older than 20
            @break

            @case(20)
                {{ $name }} is exactly 20 years old
            @break

            @default
                Unknown age

        @endswitch
    </h1>

    <h2>
        @for($x = 1; $x <= 10 ; $x++)
            2 x {{ $x }} = {{ $x * 2 }} <br>
        @endfor
    </h2>
    @foreach($users as $user)

        <h3>{{ $user['name'] }} - {{ $user['age'] }}</h3>

    @endforeach

    <table border="1" width="50%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['age'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>
    <select name="" id="">
        <option value="">Please select</option>
        @foreach($countries as $country)
            <option {{ $country['name'] == 'India' ? 'selected' : '' }} value="{{ $country['code'] }}">{{ $country['name'] }}</option>
        @endforeach
    </select>

    <input type="checkbox" >


</body>

</html>
