<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app/js'])
    <title>Laravel Training</title>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">


    {{-- <header>
        <h1 style="bg-red-500">This is a Header</h1>
    </header> --}}

    {{ $slot }}
</body>

</html>
