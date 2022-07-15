<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>train</title>
</head>
<body>
    <ul>
        @foreach ($trains as $item)
        <li> Treno : {{ $item->id }} in partenza da {{ $item->start_station }} con destinazione {{ $item->end_station }}<br>
             data di partenza : {{ $item->departure_time }} data di arrivo {{ $item->arrival_time }} <br>
             in orario : {{ $item->in_time }}  cancellato : {{ $item->deleted }}
        </li>
        @endforeach
    </ul>
</body>
</html>
