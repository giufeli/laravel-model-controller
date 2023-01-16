<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($movies as $items)
            <li>{{ $items->id }} - {{ $items->title }} - {{ $items->original_title }} - {{ $items->nationality }} - {{ $items->date }}- {{ $items->vote }}</li>
        @endforeach
    </ul>
</body>
</html>
