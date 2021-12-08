<html>
<head>
    <title>Person</title>
</head>

<body>
    <h1> View: Person</h1>

    <ul>
        @foreach($persons as $person)
        <li><a href="/persons/1"> {{ $person->name }} </a></li>
        @endforeach
    </ul>

</body>
</html>
