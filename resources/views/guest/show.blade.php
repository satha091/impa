<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $event->id }}
    {{ $event->event_title }}
    <a href="{{ route('guest.register',['event'=>$event->id]) }}"> Register</a>
</body>
</html>
