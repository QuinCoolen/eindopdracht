<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Historical Events</title>
</head>
<body>
    <h1>Historical Events</h1>
    <button onclick="window.location.href = '/events/create';">Add New Event</button>
    @foreach ($events as $event)
        <ul>
            <li>{{$event->id}}</li>
            <li>{{$event->name}}</li>
            <li>{{$event->date}}</li>
            <li>{{$event->description}}</li>
            <li><button onclick="window.location.href = '/events/{{$event->id}}/edit';">Edit</button></li>
            <li>
                <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        </ul>
    @endforeach
</body>
</html>