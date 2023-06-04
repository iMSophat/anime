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
    <main class="container mx-auto flex h-screen items-center justify-center">
        <div class="w-full flex flex-col gap-10 items-center justify-center max-h-screen overflow-y-auto">
            <form class="bg-white flex p-5 flex-col gap-4 pb-12 rounded-xl h-full max-h-[30rem] w-full max-w-md shadow-xl shadow-slate-200">
                {{-- <img class="h-24 mx-auto object-cover" src="{{ asset('logo.svg') }}" alt="logo"> --}}
                <h1 class="text-center text-4xl font-bold">
                    <p>LOGIN <span class="font-thin">ACCOUNT</span></p>
                    <div class="border-b h-px drop-shadow-2xl bg-white mx-auto w-16 pt-5"></div>
                </h1>
                <div class="flex flex-col gap-4 py-7">
                    <div class="flex flex-col gap-2 px-4">
                        <label for="">Username</label>
                        <input type="text" name="" id="" placeholder="Leat Sophat" class="border w-full rounded-xl py-1.5 px-3 focus:outline-none">
                    </div>
                    <div class="flex flex-col gap-2 px-4">
                        <label for="">Password</label>
                        <div class="relative">
                            <i class="absolute right-4 top-1/2 -translate-y-1/2 w-2 h-2 bg-red-500"></i>
                                <input type="text" name="" id="" placeholder="Ex: A-Z,a-z,0-9,@-&" class="border w-full rounded-xl py-1.5 px-3 focus:outline-none">
                        </div>
			        </div>
                </div>

                <div class="mx-auto px-4 w-full">
                    <a href="{{ route('otp.index') }}" rel="unfollow" class="bg-primary justify-center items-center flex w-full text-center flex-shrink-0 text-sm font-roboto font-medium text-white p-2.5 px-4 rounded-full">
                       Login
                    </a>
                </div>
            </form>

            <div class="text-center">
                <p>Don't have an account? <a href="{{ route('register.index') }}" class="font-medium">Register →</a></p>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    @yield('script')
</body>
</html>
