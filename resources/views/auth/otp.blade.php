<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @includeIf('layouts.head')
    @yield('style')
</head>
<body>
    <main class="container mx-auto flex h-screen items-center justify-center">
        <div class="w-full flex flex-col gap-10 items-center justify-center max-h-screen overflow-y-auto">
            <form class="bg-white flex p-5 pb-9 flex-col gap-4 rounded-xl h-full w-full max-w-md shadow-xl shadow-slate-200">
                <h1 class="text-center text-4xl font-bold pb-5">
                    <p>VERIFY <span class="font-thin">OTP</span></p>
                    <div class="border-b h-px drop-shadow-2xl bg-white mx-auto w-16 pt-5"></div>
                </h1>
                <div class="flex flex-col gap-4">
                    
                    <div class="flex flex-col gap-2 px-4">
                        <p>The secret OTP code has been sent to your email address. To continue you need to verify first.</p>
                        <p class="text-xs">Wrong email? <a href="{{ route('register.index') }}" class="font-medium text-primary">Change Email →</a></p>
                    </div>
                    <div class="flex flex-col gap-2 px-4 py-5">
                        <div class="relative">
                            <input type="text" name="" id="" class="border text-center w-full rounded-xl py-1.5 px-3 focus:outline-none">
                        </div>
                    </div>
                </div>

                <div class="mx-auto px-4 w-full">
                    <a href="{{ route('home.index') }}" rel="unfollow" class="bg-primary justify-center items-center flex w-full text-center flex-shrink-0 text-sm font-roboto font-medium text-white p-2.5 px-4 rounded-full">
                       Verify
                    </a>
                </div>
            </form>

            <div class="text-center">
                <p>You don't get it? <a href="{{ route('login.index') }}" class="font-medium">Resend →</a></p>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    @yield('script')
</body>
</html>
