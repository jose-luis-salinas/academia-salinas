<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <title>Salinas: Academia Online</title>
</head>
<body>
    <nav class="container-y-1 d-flex gap-y-1 bg-dark-blue p-1 sidebar">
        <div class="container-x-3 center">
            <img src="{{asset('img/logo.png')}}" alt="Logo Academia">
        </div>
        <div class="container-x-5 px-3 py-1 search">
            <form action="" class="container card">

            </form>
        </div>
        <div class="container-x-5 d-flex links">
            <ul class="container-x-fluid d-flex">
                <li class="container-x-fluid">
                    <a href="" class="container px-1 text-white center">
                        Cursos
                    </a>
                </li>
                <li class="container">
                    <a href="" class="container px-1 text-white center">
                        Contáctanos
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>