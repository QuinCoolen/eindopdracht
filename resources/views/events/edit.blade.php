<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <button class="fixed ml-5 mt-5 bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" onclick="window.location.href = '/events';"">Back</button>
    
    <div class="grid place-items-center h-screen">
        <div class="flex flex-col text-center gap-4 border-4 border-blue-500 border-opacity-75 p-2 rounded">
            <h1 class="text-xl">Edit Event</h1>
            <form class="flex flex-col gap-4" action="{{ route('events.update', $event->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="name" id="name" required value="{{ $event->name }}">
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="date" name="date" id="date" required value="{{ $event->date }}">
                <textarea class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="description" id="description" required >{{ $event->description }}</textarea>
                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>