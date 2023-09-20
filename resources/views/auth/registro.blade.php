@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">   

    <div class="md:w-1/2 p-5">
        <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
    </div>

    <div class="md:w-1/3 bg-white p-3 rounded-lg shadow-xl">
        <form action="">
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input id="name" type="text" name="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
            </div>

            <div class="mb-5">
                <label for="usuario" class="mb-2 block uppercase text-gray-500 font-bold">
                    Usuario
                </label>
                <input id="usuario" type="text" name="usuario" placeholder="Nombre de usuario" class="border p-3 w-full rounded-lg">
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    E-mail
                </label>
                <input id="email" type="email" name="email" placeholder="Introduce tu e-mail" class="border p-3 w-full rounded-lg">
            </div>

            <div class="mb-5">
                <label for="clave" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña
                </label>
                <input id="clave" type="password" name="clave" placeholder="Contraseña de usuario" class="border p-3 w-full rounded-lg">
            </div>
                
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repite la contraseña
                </label>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Repite la contraseña" class="border p-3 w-full rounded-lg ">
            </div>

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg"

                
            
        </form>

    </div>


</div>


@endsection