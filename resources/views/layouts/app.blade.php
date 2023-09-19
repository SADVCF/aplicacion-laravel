<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('titulo')</title>
        @vite('resources/css/app.css')

        

       
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">   

        <div class="container mx-auto flex justify-between items-center ">
            <h1 class="text-3xl font-black">
                DevsTagram
            </h1>

            <nav class="flex gap-5">
                <a href class="font-bold uppercase text-gray-600 text-sm"="">Login</a>
                <a href class="font-bold uppercase text-gray-600 text-sm"="">Crear cuenta</a>
            </nav>
        </div>
        
        </header>
        
    

    </body>

</html>