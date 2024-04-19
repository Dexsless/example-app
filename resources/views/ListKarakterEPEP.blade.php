<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Raja EPEP : {{$king}} <br>
    Daftar Karakter HTTPS :

    @foreach ($biasa as $value)
    @if ($value == "Kelly")
    <li>{{$value}} - aku punya sg ripper</li>
    @else
    <li>{{$value}}</li>
    @endif
    @endforeach
</body>
</html>