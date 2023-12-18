<nav class="fixed bottom-0 right-0 left-0 md:hidden z-50">
    <div class="h-28 flex items-end relative">
        <div class="h-16 w-full bg-sky-600 z-0 border-t-2 border-white">
            <div class="mx-auto w-max h-full grid max-sm:grid-cols-5 gap-5 items-center -z-30">
                <a href="" @class([
                    'flex items-center justify-center h-12 w-12 bg-white rounded-full relative top-[-33px]' => Route::is(
                        'my.market'),
                    'flex items-center justify-center h-12 w-12 bg-slate-300 rounded-full text-slate-700 hover:bg-white hover:text-black' => !Route::is(
                        'my.market'),
                ])>
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
                </a>
                <a href="{{ route('products') }}" @class([
                    'flex items-center justify-center h-12 w-12 bg-white rounded-full relative top-[-33px]' => Route::is(
                        'products'),
                    'flex items-center justify-center h-12 w-12 bg-slate-300 rounded-full text-slate-700 hover:bg-white hover:text-black' => !Route::is(
                        'products'),
                ])>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </a>
                <a href="{{route('dashboard')}}" @class([
                    'flex items-center justify-center h-12 w-12 bg-white rounded-full relative top-[-33px]' => Route::is(
                        'dashboard'),
                    'flex items-center justify-center h-12 w-12 bg-slate-300 rounded-full text-slate-700 hover:bg-white hover:text-black' => !Route::is(
                        'dashboard'),
                ])>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-board"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                        <path d="M4 9h8" />
                        <path d="M12 15h8" />
                        <path d="M12 4v16" />
                    </svg>
                </a>
                <a href="{{route('my.profile')}}" @class([
                    'flex items-center justify-center h-12 w-12 bg-white rounded-full relative top-[-33px]' => Route::is(
                        'my.profile'),
                    'flex items-center justify-center h-12 w-12 bg-slate-300 rounded-full text-slate-700 hover:bg-white hover:text-black' => !Route::is(
                        'my.profile'),
                ])>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                </a>
                <a href="{{route('setting')}}" @class([
                    'flex items-center justify-center h-12 w-12 bg-white rounded-full relative top-[-33px]' => Route::is(
                        'setting'),
                    'flex items-center justify-center h-12 w-12 bg-slate-300 rounded-full text-slate-700 hover:bg-white hover:text-black' => !Route::is(
                        'setting'),
                ])>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-cog"
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
                </a>
            </div>
            <div class="h-16 w-full absolute bottom-0 left-0 -z-20">
                <div class="mx-auto w-max h-full grid grid-cols-5 gap-3 items-center -z-10">
                    <a href="" @class([
                        'w-14 h-14 bg-sky-600 rounded-full relative top-[-32px] border-2' => Route::is('my.market'),
                        'w-14 h-14 bg-sky-600 rounded-full invisible' => !Route::is('my.market'),
                    ])></a>
                    <a href="" @class([
                        'w-14 h-14 bg-sky-600 rounded-full relative top-[-32px] border-2' => Route::is('products'),
                        'w-14 h-14 bg-sky-600 rounded-full invisible' => !Route::is('products'),
                    ])></a>
                    <a href="" @class([
                        'w-14 h-14 bg-sky-600 rounded-full relative top-[-32px] border-2' => Route::is('dashboard'),
                        'w-14 h-14 bg-sky-600 rounded-full invisible' => !Route::is('dashboard'),
                    ])></a>
                    <a href="" @class([
                        'w-14 h-14 bg-sky-600 rounded-full relative top-[-32px] border-2' => Route::is('my.profile'),
                        'w-14 h-14 bg-sky-600 rounded-full invisible' => !Route::is('my.profile'),
                    ])></a>
                    <a href="" @class([
                        'w-14 h-14 bg-sky-600 rounded-full relative top-[-32px] border-2' => Route::is('setting'),
                        'w-14 h-14 bg-sky-600 rounded-full invisible' => !Route::is('setting'),
                    ])></a>
                </div>
            </div>
        </div>
    </div>
</nav>
