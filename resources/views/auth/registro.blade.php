@extends('layouts.app')

@section('titulo')
    Regístrate en Instragram Fake
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">   

    <div class="md:w-1/2 p-5">
        <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
    </div>

    <div class="md:w-1/3 bg-white p-3 rounded-lg shadow-xl">

        <form action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input id="name" type="text" name="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value={{old('name')}}>
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                    Usuario
                </label>
                <input id="username" type="text" name="username" placeholder="Nombre de usuario" class="border p-3 w-full rounded-lg @error('username') border-red-500
                    
                @enderror"value={{old('username')}}>
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
        
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    E-mail
                </label>
                <input id="email" type="email" name="email" placeholder="Introduce tu e-mail" class="border p-3 w-full rounded-lg @error('email') border-red-500
                    
                @enderror"value={{old('email')}}>
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña
                </label>
                <input id="password" type="password" name="password" placeholder="Contraseña de usuario" class="border p-3 w-full rounded-lg @error('password') border-red-500
                    
                @enderror"value={{old('password')}}>
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
                
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repite la contraseña
                </label>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Repite la contraseña" class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500
                    
                @enderror"value={{old('password_confirmation')}}>
            </div>

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg">

                
            
        </form>

    </div>


</div>


@endsection