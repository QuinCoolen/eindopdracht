<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" required value="{{ $event->name }}">
        <input type="date" name="date" id="date" required value="{{ $event->date }}">
        <input type="text" name="description" id="description" required value="{{ $event->description }}">]
        <button type="submit">Submit</button>
    </form>
</body>
</html>