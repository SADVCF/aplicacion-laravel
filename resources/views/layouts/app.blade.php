<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{asset('css/app.css')}}>
        <title>DevStagram - @yield('titulo')</title>
        <script src="{{asset('js/app.js')}}" defer></script>
        @vite('resources/css/app.css')

        

       
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">   

        <div class="container mx-auto flex justify-between items-center ">
            <h1 class="text-3xl font-black"><a href="/">Instragram Fake</a>
            </h1>

            @auth
                <nav class="flex gap-2 items-center ">
                    <a class="font-bold  text-gray-600 text-sm" href="{{route('posts.index')}}">Hola: <span>{{auth()->user()->username}}</span></a>
                    
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                            Cerrar sesión
                        </button>
                    </form>
                </nav>

            @endauth

            @guest
                <nav class="flex gap-2 items-center">
                    <a href="{{route('login')}}" class="font-bold uppercase text-gray-600 text-sm">Login</a>
                    <a href="{{route('register')}}" class="font-bold uppercase text-gray-600 text-sm">Crear cuenta</a>
                </nav>
            @endguest
            
        </div>
        
        </header>

        <main class="container mx-auto mt-10 ">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
                @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Instragram Fake - Todos los derechos reservados - 
            {{now()->year}}
            - AmunT
                
            
        </footer>
       
        
        
    

    </body>

</html>