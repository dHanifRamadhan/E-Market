<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Market SMKI Utama</title>
    <link rel="icon" href="{{ asset('icons/smkiutama.jpg') }}">
    @vite('resources/css/app.css')
</head>

<body class="relative bg-slate-200 overflow-hidden w-screen h-screen z-0">
    <div class="absolute top-0 left-0 right-0 h-12 flex px-2 bg-sky-600 md:hidden">
        <button id="mobile-menu-button"
            class="m-1 border-2 border-sky-700 py-1 px-2 flex items-center justify-center rounded-lg bg-blue-500 hover:bg-blue-400">
            <span class="text-slate-300 hover:text-slate-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </span>
        </button>
        <div class="w-max ml-auto pr-4">
            <span class="text-white font-mono font-bold flex h-full items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l18 0" />
                    <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                    <path d="M5 21l0 -10.15" />
                    <path d="M19 21l0 -10.15" />
                    <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                </svg>
                Market SMKI
            </span>
        </div>
    </div>

    {{-- <div id="sidebar"
        class="md:w-64 bg-sky-700 h-screen fixed top-0 left-0 overflow-y-auto transition-transform transform -translate-x-full md:translate-x-0 duration-300 ease-in-out">
        <!-- Close Button -->
        <button id="close-button"
            class="text-white absolute top-4 right-4 md:hidden focus:outline-none focus:text-gray-400">
            Close
        </button>
        <!-- Sidebar Content -->
        <div class="p-4">
            <h1 class="text-2xl font-semibold text-white mb-4">Market SMKI</h1>
            <!-- Sidebar Links -->
            <!-- Add your links here -->
            <ul>
                <li><a href="#" class="text-white hover:text-gray-400">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Products</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Categories</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Contact</a></li>
            </ul>
        </div>
    </div> --}}
    <aside
        class="absolute top-0 left-0 bottom-0 h-full w-64 bg-sky-700 z-10 transition-transform transform max-sm:-translate-x-full duration-300 ease-in-out"
        id="sidebar">
        <div class="w-full h-12 lg:h-20 border-b-2 border-sky-800 flex relative">
            <button
                class="absolute top-0 left-2 bottom-0 p-2 text-white border-2 border-sky-800 bg-sky-600 rounded-md md:hidden"
                id="close-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </button>
            <div class="w-max mx-auto flex items-center justify-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-cog text-white"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M12.003 21c-.732 .001 -1.465 -.438 -1.678 -1.317a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c.886 .215 1.325 .957 1.318 1.694" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M19.001 15.5v1.5" />
                    <path d="M19.001 21v1.5" />
                    <path d="M22.032 17.25l-1.299 .75" />
                    <path d="M17.27 20l-1.3 .75" />
                    <path d="M15.97 17.25l1.3 .75" />
                    <path d="M20.733 20l1.3 .75" />
                </svg>
                <span class="text-white font-bold">
                    Settings
                </span>
            </div>
        </div>
        <ul class="w-max ml-auto h-full py-5 pr-3 flex flex-col gap-4">
            <li class="px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800">
                <a href="{{ route('dashboard') }}" class="w-full h-full flex gap-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-collage"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                        <path d="M10 4l4 16" />
                        <path d="M12 12l-8 2" />
                    </svg>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li @class([
                'px-6 py-3 w-48 rounded-md border-2 border-sky-600 bg-sky-800' => Route::is(
                    'product'),
                'px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800' => !Route::is(
                    'products'),
            ])
                class="px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800">
                <a href="{{ route('product') }}" class="w-full h-full flex gap-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-packages" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                        <path d="M2 13.5v5.5l5 3" />
                        <path d="M7 16.545l5 -3.03" />
                        <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                        <path d="M12 19l5 3" />
                        <path d="M17 16.5l5 -3" />
                        <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
                        <path d="M7 5.03v5.455" />
                        <path d="M12 8l5 -3" />
                    </svg>
                    <span>
                        Products
                    </span>
                </a>
            </li>
            <li @class([
                'px-6 py-3 w-48 rounded-md border-2 border-sky-600 bg-sky-800' => Route::is(
                    'cart'),
                'px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800' => !Route::is(
                    'cart'),
            ])
                class="px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800">
                <a href="{{ route('cart') }}" class="w-full h-full flex gap-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-packages" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                        <path d="M2 13.5v5.5l5 3" />
                        <path d="M7 16.545l5 -3.03" />
                        <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                        <path d="M12 19l5 3" />
                        <path d="M17 16.5l5 -3" />
                        <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
                        <path d="M7 5.03v5.455" />
                        <path d="M12 8l5 -3" />
                    </svg>
                    <span>
                        Cart
                    </span>
                </a>
            </li>
            <li @class([
                'px-6 py-3 w-48 rounded-md border-2 border-sky-600 bg-sky-800' => Route::is(
                    'transaction'),
                'px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800' => !Route::is(
                    'transaction'),
            ])
                class="px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800">
                <a href="{{ route('transaction') }}" class="w-full h-full flex gap-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-packages" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                        <path d="M2 13.5v5.5l5 3" />
                        <path d="M7 16.545l5 -3.03" />
                        <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                        <path d="M12 19l5 3" />
                        <path d="M17 16.5l5 -3" />
                        <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
                        <path d="M7 5.03v5.455" />
                        <path d="M12 8l5 -3" />
                    </svg>
                    <span>
                        Transaction
                    </span>
                </a>
            </li>
            @auth
                <li class="px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800">
                    <a href="{{ route('logout') }}" class="w-full h-full flex gap-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-direction-sign-off"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M18.73 14.724l1.949 -1.95a1.095 1.095 0 0 0 0 -1.548l-7.905 -7.905a1.095 1.095 0 0 0 -1.548 0l-1.95 1.95m-2.01 2.01l-3.945 3.945a1.095 1.095 0 0 0 0 1.548l7.905 7.905c.427 .428 1.12 .428 1.548 0l3.95 -3.95" />
                            <path d="M8 12h4" />
                            <path d="M13.748 13.752l-1.748 1.748" />
                            <path d="M3 3l18 18" />
                        </svg>
                        <span>
                            Sign Out
                        </span>
                    </a>
                </li>
            @else
                <li class="px-6 py-3 w-48 rounded-md hover:border-2 hover:border-sky-600 hover:bg-sky-800">
                    <a href="{{ route('login') }}" class="w-full h-full flex gap-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-direction-sign"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M3.32 12.774l7.906 7.905c.427 .428 1.12 .428 1.548 0l7.905 -7.905a1.095 1.095 0 0 0 0 -1.548l-7.905 -7.905a1.095 1.095 0 0 0 -1.548 0l-7.905 7.905a1.095 1.095 0 0 0 0 1.548z" />
                            <path d="M8 12h7.5" />
                            <path d="M12 8.5l3.5 3.5l-3.5 3.5" />
                        </svg>
                        <span>
                            Sign In
                        </span>
                    </a>
                </li>
            @endauth
        </ul>
    </aside>

    <main class="h-full -z-10 md:ml-64 max-sm:pt-12">
        <div class="h-full border-2 border-black p-10 w-full">
            <div class="w-full h-full border-2 border-black">
                @yield('main')
            </div>
        </div>
    </main>

    <script>
        // Toggle sidebar on mobile
        const closeButton = document.getElementById('close-button');
        const sidebar = document.getElementById('sidebar');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        // const sidebar = document.querySelector('.md\\:w-64');

        mobileMenuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        closeButton.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });
    </script>
</body>

</html>
