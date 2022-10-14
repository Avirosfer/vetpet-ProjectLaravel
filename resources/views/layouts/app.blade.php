<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VetPet - @yield('titulo')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body class="bg-inherit" style="background-image: url('img/fondo.jpg')">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">

                <h1 class="text-3xl font-black">
                    VetPet Software
                </h1>

                <nav class="flex gap-5">
                    <a class="font-bold uppercase text-gray-600 text-base hover:text-gray-300" href="#" >
                        Login
                    </a>
                    <a class="font-bold uppercase text-gray-600 text-base  hover:text-gray-300" href="/crear-cuenta">
                        Crear Cuenta
                    </a>
                </nav>

            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-gray-50 text-center text-4xl mb-10">
                 @yield('titulo')
             </h2>
             @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-100 font-bold uppercase">
            VetPet Software - Todos los derechos reservados
            {{ now()->year }}
        </footer>

    </body>

</html>
