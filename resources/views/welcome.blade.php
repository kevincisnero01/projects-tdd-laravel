<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        <h1 class="my-4 mx-auto text-4xl font-weight text-center">Proyectos</h1>
        <ul class="w-full bg-white border-r border-gray-300 shadow-xl">
            @foreach ($repositories as $repository)
                <li class="flex items-center text-black p-2 hover:bg-gray-300">
                    <img 
                        src="{{ asset($repository->user->profile_photo_url) }}" 
                        class="w-12 h-12 rounded-full mr-2"
                    >
                    <div class="flex justify-between w-full">
                        <div class="flex-1">
                            <h2 class="text-sm font-semibold text-gray-900">{{ $repository->url }}</h2>
                            <p>{{ $repository->description }}</p>
                        </div>
                        <span class="text-xs font-medium text-gray-600">
                            {{ $repository->created_at->diffForHumans() }}
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </body>
</html>
