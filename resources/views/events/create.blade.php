<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Add New Event</title>
</head>
<body>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <input type="text" name="name" id="name" required>
        <input type="date" name="date" id="date" required>
        <input type="text" name="description" id="description" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>