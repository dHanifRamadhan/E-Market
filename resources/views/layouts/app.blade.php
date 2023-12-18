<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Market SMKI Utama</title>
    <link rel="icon" href="{{ asset('icons/smkiutama.jpg') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        /* Gaya scrollbar untuk Chrome, Safari, dan Opera */
        .overflow-x-auto::-webkit-scrollbar {
            width: 1px;
            height: 0px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background-color: transparent;
            border-radius: 10px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background-color: transparent;
            border-radius: 10px
        }

        /* Gaya scrollbar untuk Firefox */
        .overflow-x-auto {
            scrollbar-width: thin;
        }

        
        /* Gaya scrollbar untuk Chrome, Safari, dan Opera */
        .overflow-y-auto::-webkit-scrollbar {
            width: 1px;
            height: 0px;
        }

        .overflow-y-auto::-webkit-scrollbar-thumb {
            background-color: transparent;
            border-radius: 10px;
        }

        .overflow-y-auto::-webkit-scrollbar-track {
            background-color: transparent;
            border-radius: 10px
        }

        /* Gaya scrollbar untuk Firefox */
        .overflow-y-auto {
            scrollbar-width: thin;
        }
    </style>
</head>

<body style="box-sizing: border-box;" class="relative bg-slate-200 overflow-hidden w-screen h-screen">
    @include('layouts.navbars.nav')
    @include('layouts.navbars.phoneNav')
    <main class="h-full w-full max-sm:pt-0 md:pt-24 overflow-y-auto -z-10">
        @yield('main')
    </main>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
