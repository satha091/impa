<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
      <form action="{{ route('guest.store',['event'=>$event_id]) }}" method="post">
        @csrf
        <input type="text" name="event_id" value={{ $event_id }} id="">
        <input type="text" name="user_name" id="" placeholder="Name">
        <input type="text" name="user_contact" id="" placeholder="Mobile">
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
