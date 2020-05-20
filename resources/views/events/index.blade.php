<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <th>

        </th>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{  $event->id }}</td>
                    <td>{{  $event->event_title }}</td>
                    <td>{{  $event->event_desc }}</td>
                    <td><a href="{{ route('events.show',['event'=>$event->id])  }}"> Show</a></td>
                    <td><a href="{{ route('events.edit',['event'=>$event->id])  }}"> Edit</a></td>
                    <td>
                    <form action="{{ route('events.destroy',['event'=>$event->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
