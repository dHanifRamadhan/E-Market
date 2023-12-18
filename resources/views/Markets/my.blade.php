@extends('layouts.app')
@section('main')
    <div class="h-screen pt-14">
        <div class="w-max mx-auto bg-sky-600 rounded-md">
            <div>
                <img src="https://placehold.co/1000x280" alt="" width="1000px" height="280px" class="rounded-t-md">
            </div>
            <div class="px-7 py-20 relative">
                <div class="w-max absolute -top-[4.85rem]">
                    <img src="https://placehold.co/150x150" alt="" class="rounded-full border-2 border-white"
                        width="150px" height="150px">
                </div>
                <div class="mt-2">
                    <span class="border-b-2 border-slate-200 text-2xl font-mono text-white">
                        Toko China
                    </span>
                </div>
                <div class="mt-12 flex flex-col gap-2">
                    <span class="border-b-2 w-max border-slate-200 text-lg font-mono text-white pr-2">
                        Description
                    </span>
                    <a class="w-[800px] font-mono text-sm text-white" align="left">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum temporibus ad, excepturi maiores
                        nihil cupiditate quis voluptatibus! Sed assumenda quod iste laboriosam, dolor vero modi quis tenetur
                        hic veritatis placeat.
                    </a>
                </div>
                <div class="mt-12 flex flex-col gap-2">
                    <span class="border-b-2 w-max border-slate-200 text-lg font-mono text-white pr-2">
                        Contact
                    </span>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3 flex gap-5 font-mono text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                    stroke-width="0" fill="currentColor" />
                                <path
                                    d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                    stroke-width="0" fill="currentColor" />
                            </svg>
                            <span>
                                d.haniframadhan@gmail.com
                            </span>
                        </div>
                        <div class="p-3 flex gap-5 font-mono text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                <path d="M15 7a2 2 0 0 1 2 2" />
                                <path d="M15 3a6 6 0 0 1 6 6" />
                            </svg>
                            <span>
                                +62 896-3807-0331
                            </span>
                        </div>
                        <div class="p-3 flex gap-5 font-mono text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pins"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10.828 9.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />
                                <path d="M8 7l0 .01" />
                                <path d="M18.828 17.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />
                                <path d="M16 15l0 .01" />
                            </svg>
                            <p class="w-96">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minus illo in minima adipisci
                                sed repudiandae perspiciatis provident culpa quo non impedit quibusdam, ut, delectus
                                consequatur debitis pariatur eius beatae?
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 flex flex-col gap-2">
                    <div class="border-b-2 w-max border-slate-200 text-lg font-mono text-white pr-2">
                        <span>
                            Product |
                        </span>
                        <a href="" class="text-xs">
                            Create Product
                        </a>
                    </div>
                    <div class="grid grid-cols-5 mt-3 gap-5"> 
                        <div class="bg-white p-2 h-max w-max transform scale-100 transition-transform duration-300 hover:scale-110 group rounded-md">
                            <div class="h-max w-max max-sm:hidden">
                                <img src="https://placehold.co/150x150" alt="">
                            </div>
                            <div class="flex flex-col justify-center gap-1 py-2">
                                <span class="text-center text-md max-sm:text-sm font-sans font-medium">
                                    Nama Product
                                </span>
                                <span class="flex gap-1 justify-center text-yellow-300 max-sm:scale-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                        width="15" height="15" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                            stroke-width="0" fill="currentColor" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                        width="15" height="15" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                            stroke-width="0" fill="currentColor" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                        width="15" height="15" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                            stroke-width="0" fill="currentColor" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                        width="15" height="15" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                            stroke-width="0" fill="currentColor" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                        width="15" height="15" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                            stroke-width="0" fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="text-sm max-sm:text-xs font-medium font-sans text-center">
                                    Rp 10.000,00
                                </span>
                            </div>
                            <form class="hidden group-hover:flex group-hover:justify-center mt-2">
                                <button class="bg-sky-600 w-full flex items-center justify-center py-1">
                                    <span class="text-xs text-white max-sm:text-xs max-sm:py-1">
                                        ADD TO CART
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
