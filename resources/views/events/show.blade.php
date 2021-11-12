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
        <div class="flex w-64 flex-col text-center gap-4 border-4 border-blue-500 border-opacity-75 p-2 rounded">
            <ul class="flex flex-col gap-4">
                <h1 class="text-xl">{{$event->name}}</h1>
                <li>ID: {{$event->id}}</li>
                <li>Date: {{$event->date}}</li>
                <li>Description: {{$event->description}}</li>
            </ul>
        </div>
    </div>
</body>
</html>