@extends('layouts.app')

@section('titulo')
    Mi Perfil: {{ $user->username }}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario"/>
            </div>

            <div class="sm:w-8/12 lg:w-6/12 px-5 mb-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10 text-gray-50">

                <p class="text-gray-300 text-lg mt-5 font-bold">
                    <span class="font-normal text-xl text-cyan-300">Nombre: </span>
                    {{ $user->name }}
                </p>

            </div>
        </div>
    </div>
@endsection
