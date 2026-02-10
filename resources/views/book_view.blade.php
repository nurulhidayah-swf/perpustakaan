<!DOCTYPE html>
<html>
<head>
    <title>Daftar Book</title>
</head>
<body>

    <h1>Daftar Book</h1>

    <ul>
    @foreach($data as $p) <li>
            <h3>{{ $p->title }}</h3>
            <p>author: {{ $p->author }}</p>
            <p>year: {{ $p->year }}</p>
            <p>Stock: {{ $p->stock }}</p>
            <hr>
        </li>
    @endforeach
</ul>

</body>
</html>
