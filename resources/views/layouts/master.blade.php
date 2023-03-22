<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.head')
    @yield('style')
</head>
<body>
    <header class="pphat-w-full pphat-shadow-2xl pphat-shadow-slate-100 pphat-flex pphat-items-center pphat-px-4">
        <x-headers header="header"/>
    </header>
    <main class="pphat-container pphat-mx-auto pphat-flex">
        
        <x-sidebar />
        <div class="pphat-w-full pphat-h-fit pphat-max-h-[calc(100vh_-_56px)] pphat-overflow-y-auto">
            @yield('content')
        </div>

    </main>

    @include('layouts.footer')
    @yield('script')
</body>
</html>