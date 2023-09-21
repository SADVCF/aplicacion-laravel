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
                <label for="usuario" class="mb-2 block uppercase text-gray-500 font-bold">
                    Usuario
                </label>
                <input id="usuario" type="text" name="usuario" placeholder="Nombre de usuario" class="border p-3 w-full rounded-lg @error('usuario') border-red-500
                    
                @enderror">
                @error('usuario')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
        
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    E-mail
                </label>
                <input id="email" type="email" name="email" placeholder="Introduce tu e-mail" class="border p-3 w-full rounded-lg">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña
                </label>
                <input id="password" type="password" name="password" placeholder="Contraseña de usuario" class="border p-3 w-full rounded-lg">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
                
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repite la contraseña
                </label>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Repite la contraseña" class="border p-3 w-full rounded-lg ">
            </div>

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg">

                
            
        </form>

    </div>


</div>


@endsection