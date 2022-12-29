<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <header class="fixed flex w-full bg-blue-400 top-0 left-0 items-center z-10">
                <div class="container">
                    <div class="flex items-center justify-between relative">
                        <div class="flex items-center max-w-screen-xl px-4 ">
                            <a href="#" class="flex items-center mb-3">
                                <img src="imgs/bali.png" class="h-8 mr-3 mt-3 sm:h-9" />
                                <span class="self-center text-xl font-semibold mt-3 whitespace-nowrap dark:text-white">CAKCAK</span>
                            </a>
                        </div>
                        <div class="flex items-center px-4 lg:hidden">
                            <a href="#">
                                <span class="w-[30px] h-[2px] my-2 block bg-black"></span>
                                <span class="w-[30px] h-[2px] my-2 block bg-black"></span>
                                <span class="w-[30px] h-[2px] my-2 block bg-black"></span>
                        </a>
                        </div>
                </div>
                </div>
                
                <nav class="hidden float right bg-blue-400 border-gray-200 py-2.5 mx-auto lg:block">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/" class="text-base text-black py-2 mx-8 group-hover:to-blue-400">Home</a>
                        </li>
                        <li class="group">
                            <a href="/home" class="text-base text-black py-2 mx-8 group-hover:to-blue-400">About</a>
                        </li>
                        <li class="group">
                            <a href="ticket" class="text-base text-black py-2 mx-8 group-hover:to-blue-400">Ticket</a>
                        </li>
                        <li class="group">
                            <a href="signin" class="text-base text-black py-2 mx-8 group-hover:to-blue-400">Login</a>
                        </li>
                        <a href="cart">
                            <img src="https://www.freeiconspng.com/thumbs/cart-icon/basket-cart-icon-27.png" alt="" class="h-8 py-2 mx-8">
                        </a>
                    </ul>
                </nav>
                    
            </header>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>