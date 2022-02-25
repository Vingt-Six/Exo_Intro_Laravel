<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav
        class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a href="" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
        </div>
        <div>
            <a href="/" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Fruit</a>
        </div>
    </nav>
    <ul>
        @foreach ($fruits as $valeur)
            <li>{{$valeur}}</li>
        @endforeach
    </ul>
</body>
</html>