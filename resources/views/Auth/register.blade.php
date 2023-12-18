<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Market Login</title>
    <link rel="icon" href="{{ asset('icons/smkiutama.jpg') }}">
    @vite('resources/css/app.css')
</head>

<body class="w-screen h-screen">
    <div class="h-full flex items-center justify-center">
        <div class="h-max w-max relative grid grid-cols-2">
            <div class="w-auto">
                <img src="https://i.pinimg.com/564x/d4/86/c6/d486c632214343986f6d4c7f2b56ccaf.jpg" alt="">
            </div>
            <div class=" p-2 h-full flex flex-col gap-2">
                <div class="w-full h-max mt-16">
                    <div class="w-max mx-auto py-6">
                        <span class="text-2xl text-black font-mono font-semibold border-b-2 border-sky-400 pb-2 px-4">
                            Market
                            <span class="text-red-700">
                                Register
                            </span>
                        </span>
                    </div>
                </div>
                <form action="{{route('auth.register')}}" method="post" class="w-full h-max my-auto py-10">
                    @csrf
                    <div class="h-full flex flex-col justify-center items-center">
                        <div class="flex flex-col relative">
                            <label for="username" class="font-mono font-semibold text-sky-400 pl-2">Username</label>
                            <input type="text"
                                class="w-80 bg-slate-100 rounded-lg py-2 px-5 border-2 border-sky-500 z-0"
                                id="username" name="username">
                        </div>
                        <div class="flex flex-col relative mt-4">
                            <label for="email" class="font-mono font-semibold text-sky-400 pl-2">Email</label>
                            <input type="email"
                                class="w-80 bg-slate-100 rounded-lg py-2 px-5 border-2 border-sky-500 z-0"
                                id="email" name="email">
                        </div>
                        <div class="flex flex-col relative mt-4">
                            <label for="password" class="font-mono font-semibold text-sky-400 pl-2">Password</label>
                            <input type="password"
                                class="w-80 bg-slate-100 rounded-lg py-2 px-5 border-2 border-sky-500 z-0"
                                id="password" name="password">
                        </div>
                        <div class="flex flex-col relative mt-4">
                            <label for="address" class="font-mono font-semibold text-sky-400 pl-2">Address</label>
                            <textarea id="address" name="address" rows="4" class="w-80 bg-slate-100 rounded-lg py-2 px-5 border-2 border-sky-500 z-0"></textarea>
                        </div>
                        <div class="flex flex-col relative mt-4">
                            <label for="hp" class="font-mono font-semibold text-sky-400 pl-2">No. Handphone</label>
                            <input type="tel"
                                class="w-80 bg-slate-100 rounded-lg py-2 px-5 border-2 border-sky-500 z-0"
                                id="hp" name="hp">
                        </div>
                        <button type="submit"
                            class="w-80 border-2 border-sky-500 py-2 px-5 rounded-lg mt-20 bg-sky-200 hover:bg-sky-400">
                            <span class="text-sky-700 font-mono font-semibold">
                                Register
                            </span>
                        </button>
                        <span class="mt-2 text-sky-500">
                            Apa anda ingin balik ke
                            <a href="{{ route('login') }}" class="font-semibold text-sky-800">
                                login
                            </a>
                            ?
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
