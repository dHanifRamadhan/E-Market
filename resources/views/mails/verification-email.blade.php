<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verfication Email</title>
    <link rel="icon" href="{{asset('icons/pngwing.com.png')}}">
    @vite('resources/css/app.css')
</head>
<body class="h-screen w-screen flex items-center justify-center">
    <div class="bg-slate-200 border-2 border-slate-300 rounded-md">
        <div class="px-96">
            <img src="{{asset('icons/mail.png')}}" alt="" class="w-48">
        </div>
        <div class="h-full w-full flex justify-center items-center py-5 flex-col">
            <span class="text-2xl font-mono">Email Verification</span>
            <p>Silakan klik untuk verification email anda</p>
            <form action="" class="mt-14">
                @csrf
                <input type="hidden" name="idUser" value="">
                <button type="submit" class="border-2 rounded-md border-slate-500 py-2 px-5 font-mono hover:bg-slate-300">
                    Verification
                </button>
            </form>
        </div>
    </div>
</body>
</html>