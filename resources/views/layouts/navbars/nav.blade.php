<nav class="bg-sky-600 absolute right-0 top-0 left-0 z-50">
    <div class="mx-auto sm:px-6 lg:px-8 ">
        <div class="flex flex-col">
            <div class="h-12 lg:px-8 flex gap-3 max-sm:mx-4">
                <div class="w-max h-full flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chess-king text-white"
                        width="27" height="27" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8 16l-1.447 .724a1 1 0 0 0 -.553 .894v2.382h12v-2.382a1 1 0 0 0 -.553 -.894l-1.447 -.724h-8z" />
                        <path d="M8.5 16a3.5 3.5 0 1 1 3.163 -5h.674a3.5 3.5 0 1 1 3.163 5z" />
                        <path d="M9 6h6" />
                        <path d="M12 3v8" />
                    </svg>
                    <span class="text-white text-lg font-sans font-bold">
                        Market SMKI
                    </span>
                </div>
                <div class="ml-auto my-auto flex gap-3">
                    <form class="hover:border-2 hover:border-black hover:rounded-lg group max-sm:hidden flex">
                        <input type="text" name="search" class="rounded-l-md py-1 px-3 border-0"
                            placeholder="Search">
                        <button class="rounded-r-md bg-white py-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="text-slate-800 icon icon-tabler icon-tabler-search" width="20" height="20"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>
                        </button>
                    </form>
                    <div class="border-0 border-black flex justify-center items-center gap-3">
                        <a href="{{route('shopping.cart')}}" class="text-white relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            <span
                                class="absolute -top-2 -right-2 text-xs border-2 border-slate-600 bg-slate-200 rounded-full px-1 text-slate-800">
                                1
                            </span>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-user-circle text-white" width="28" height="28"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="px-8 py-2 max-md:hidden">
                <div class="grid lg:grid-cols-8 md:grid-cols-5 gap-8">
                    <a @class([
                        'rounded-lg p-2 flex items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'dashboard'),
                        'rounded-lg p-2 flex items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'dashboard'),
                    ]) href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M4 9h8" />
                            <path d="M12 15h8" />
                            <path d="M12 4v16" />
                        </svg>
                        <span>
                            Dashboard
                        </span>
                    </a>
                    <a @class([
                        'md:hidden lg:flex rounded-lg p-2 items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'flash-sale'),
                        'md:hidden lg:flex rounded-lg p-2 items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'flash-sale'),
                    ])>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-supabase"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 14h8v7l8 -11h-8v-7z" />
                        </svg>
                        <span>
                            Flash-Sale
                        </span>
                    </a>
                    <a @class([
                        'md:hidden lg:flex rounded-lg p-2 items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'discount'),
                        'md:hidden lg:flex rounded-lg p-2 items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'discount'),
                    ])>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-2"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 15l6 -6" />
                            <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />
                            <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />
                            <path
                                d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                        </svg>
                        <span>
                            Discount
                        </span>
                    </a>
                    <a @class([
                        'rounded-lg p-2 flex items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'products'),
                        'rounded-lg p-2 flex items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'products'),
                    ]) href="{{ route('products') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                            <path d="M12 12l8 -4.5" />
                            <path d="M12 12l0 9" />
                            <path d="M12 12l-8 -4.5" />
                            <path d="M16 5.25l-8 4.5" />
                        </svg>
                        <span>
                            Products
                        </span>
                    </a>
                    <a @class([
                        'md:hidden lg:flex rounded-lg p-2 items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'my.stores'),
                        'md:hidden lg:flex rounded-lg p-2 items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'my.stores'),
                    ]) href="{{ route('my.stores') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21l18 0" />
                            <path
                                d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                            <path d="M5 21l0 -10.15" />
                            <path d="M19 21l0 -10.15" />
                            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        </svg>
                        <span>
                            My Stores
                        </span>
                    </a>
                    <a @class([
                        'rounded-lg p-2 flex items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'history'),
                        'rounded-lg p-2 flex items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'history'),
                    ])>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M9 12l.01 0" />
                            <path d="M13 12l2 0" />
                            <path d="M9 16l.01 0" />
                            <path d="M13 16l2 0" />
                        </svg>
                        <span>
                            History
                        </span>
                    </a>
                    <a @class([
                        'rounded-lg p-2 flex items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'my.profile'),
                        'rounded-lg p-2 flex items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'my.profile'),
                    ]) href="{{ route('my.profile') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <span>
                            Profile
                        </span>
                    </a>
                    <a @class([
                        'rounded-lg p-2 flex items-center justify-center gap-2 bg-blue-400 font-sans text-sm text-slate-300 font-semibold text-white cursor-default' => Route::is(
                            'setting'),
                        'rounded-lg p-2 flex items-center justify-center gap-2 hover:bg-blue-400 font-sans text-sm text-slate-300 font-semibold hover:text-white cursor-default' => !Route::is(
                            'setting'),
                    ]) href="{{ route('setting') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-cog"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                        <span>
                            Setting
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
