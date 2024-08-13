@php
    $year = date("Y");
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <nav class="flex justify-between items-center mb-4">
            <a href="/">
                <img class="w-24" src="{{ asset('/images/logo.png') }}" alt="" class="logo"/>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg items-center">
                @auth
                    <li>
                        <span class="font-bold uppercase">Welcome, {{auth()->user()->name}}</span>
                    </li>
                    <li>
                        <a href="/manage" class="hover:text-laravel" >
                            <i class="fa-solid fa-gear"></i>
                            Manage
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="hover:text-laravel">
                            <i class="fa-solid fa-xmark"></i>
                            Log out
                        </a>
                    </li>
                @else
                    <li>
                        <a href="/register" class="hover:text-laravel" >
                            <i class="fa-solid fa-user-plus"></i>
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="/login" class="hover:text-laravel">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>

        <main class="pb-24 mb-24">
            {{$slot}}
        </main>

        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; {{$year}}, All Rights reserved</p>
            @auth
                <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5 rounded-full">Post Job</a
            @else
                <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5 rounded-full">Register to Post Jobs!</a
            @endauth
        </footer>
        <x-flash-message/>
    </body>
</html>
