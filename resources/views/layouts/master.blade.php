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
    <header class="w-full shadow-2xl shadow-slate-100 flex items-center px-4">
        <x-headers header="header"/>
    </header>
    <main class="container mx-auto flex">
        
        <x-sidebar />
        <div class="w-full h-fit max-h-[calc(100vh_-_56px)] overflow-y-auto">
            @yield('content')
        </div>

    </main>

    @include('layouts.footer')
    @yield('script')
</body>
</html>