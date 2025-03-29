<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="text-3xl font-bold">Welcome to Work Experience page</h1>
    </header>

    <ul>
        @foreach ($data as $item)
        <li class="border border-b-2 border-gray-500 p-4 mb-4">
            <p>{{ $item->user->name }}</p>
            <p>{{ $item->company_name }}</p>
            <p>{{ $item->role }}</p>
            <p>{{ $item->start_date }} to {{$item->end_date}}</p>
        </li>
        @endforeach
    </ul>
</body>

</html>