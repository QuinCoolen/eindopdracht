<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Historical Events</title>
</head>
<body class="grid grid-cols-3 h-screen">
    <div class="col-start-2 flex flex-col flex-nowrap">
        <h1 class="text-3xl text-center">Historical Events</h1>
        <br/>
        <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded" onclick="window.location.href = '/events/create';">Add New Event</button>
        <br/>
        <div class="flex flex-col flex-nowrap gap-5">
            @foreach ($events as $event)
                <ul class="space-y-3 p-2 border-2 rounded">
                    <li class="text-xl">{{$event->name}}</li>
                    <li>{{$event->date}}</li>
                    <li><button class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded" onclick="window.location.href = '/events/{{$event->id}}';">Read More</button></li>
                    <li><button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="window.location.href = '/events/{{$event->id}}/edit';">Edit</button></li>
                    <li>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" type="submit">Delete</button>
                        </form>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</body>
</html>