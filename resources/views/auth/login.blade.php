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
    <main class="container mx-auto flex">
        <div class="w-full flex flex-col gap-10 items-center justify-center h-screen max-h-screen overflow-y-auto">
            <form class="bg-white flex p-5 flex-col gap-4 min-h-[30rem] rounded-xl h-full max-h-[30rem] w-full max-w-md shadow-xl shadow-slate-200">
                <img class="h-24 mx-auto object-cover" src="{{ asset('logo.svg') }}" alt="logo">
                <div class="flex flex-col gap-4 py-7">
                    <div class="flex flex-col gap-2 px-4">
                        <label for="">Username</label>
                        <input type="text" name="" id="" class="border w-full rounded-xl py-1.5 px-3 focus:outline-none">
                    </div>
                    <div class="flex flex-col gap-2 px-4">
                        <label for="">Password</label>
                        <input type="text" name="" id="" class="border w-full rounded-xl py-1.5 px-3 focus:outline-none">
                    </div>
                </div>

                <div class="mx-auto px-4 w-full">
                    <a href="{{ route('login.index') }}" rel="unfollow" class="bg-primary justify-center items-center flex w-full text-center flex-shrink-0 text-sm font-roboto font-medium text-white p-2.5 px-4 rounded-full">
                       Login
                    </a>
                </div>
            </form>

            <div class="text-center">
                <p>Don't have an account? <a href="" class="font-medium">Get access →</a></p>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    @yield('script')
</body>
</html>