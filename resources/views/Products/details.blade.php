@extends('layouts.app')
@section('main')
    <div class="w-max mx-auto flex flex-col gap-5 py-10">
        <div class="flex gap-16">
            <div class="flex flex-col gap-5">
                <div class="flex gap-5">
                    <img src="https://placehold.co/400x400" alt="">
                    <div class="h-max my-auto flex flex-col gap-5">
                        <button>
                            <img src="https://placehold.co/70x70" alt="">
                        </button>
                        <button>
                            <img src="https://placehold.co/70x70" alt="">
                        </button>
                        <button>
                            <img src="https://placehold.co/70x70" alt="">
                        </button>
                        <button>
                            <img src="https://placehold.co/70x70" alt="">
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex items-center">
                        <span class="text-sm font-mono font-semibold">
                            Type
                        </span>
                        <button class="w-max ml-auto bg-sky-600 p-1 text-white rounded-full mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-badge-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M13 7h-6l4 5l-4 5h6l4 -5z" />
                            </svg>
                        </button>
                    </div>
                    <div class="">
                        <div class="grid grid-cols-5">
                            <img src="https://placehold.co/90x90" alt="">
                            <img src="https://placehold.co/90x90" alt="">
                            <img src="https://placehold.co/90x90" alt="">
                            <img src="https://placehold.co/90x90" alt="">
                            <img src="https://placehold.co/90x90" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <span class="text-2xl font-mono font-semibold">Nama Product</span>
                <p class="w-96 font-mono text-xs">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti nesciunt voluptates, voluptate
                    quaerat provident repellat molestiae eos. Harum a sapiente, iure accusantium consequatur laborum
                    voluptatem maiores eaque numquam, dolore ipsa.
                </p>
                <div class="flex flex-col gap-2">
                    <span class="font-mono font-semibold">
                        Rp 1.000.000,00
                    </span>
                    <div class="flex gap-3 items-center">
                        <div class="flex gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                    stroke-width="0" fill="currentColor" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                    stroke-width="0" fill="currentColor" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                    stroke-width="0" fill="currentColor" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                    stroke-width="0" fill="currentColor" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                            </svg>
                        </div>
                        <span class="text-xs underline">
                            500rb review
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="font-mono font-semibold">
                        Colors
                    </span>
                    <div class="grid grid-cols-7">
                        <div class="p-2">
                            <div class="flex flex-col justify-center items-center gap-2 group">
                                <div class="bg-black p-3 w-max rounded-full"></div>
                                <span class="text-xs font-mono hidden group-hover:flex">
                                    Hitam
                                </span>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="flex flex-col justify-center items-center gap-2 group">
                                <div class="bg-slate-600 p-3 w-max rounded-full"></div>
                                <span class="text-xs font-mono hidden group-hover:flex">
                                    Abu
                                </span>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="flex flex-col justify-center items-center gap-2 group">
                                <div class="bg-white p-3 w-max rounded-full"></div>
                                <span class="text-xs font-mono hidden group-hover:flex">
                                    Putih
                                </span>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="flex flex-col justify-center items-center gap-2 group">
                                <div class="bg-red-600 p-3 w-max rounded-full"></div>
                                <span class="text-xs font-mono hidden group-hover:flex">
                                    Merah
                                </span>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="flex flex-col justify-center items-center gap-2 group">
                                <div class="bg-sky-600 p-3 w-max rounded-full"></div>
                                <span class="text-xs font-mono hidden group-hover:flex">
                                    Biru
                                </span>
                            </div>
                        </div>
                        <div class="p-2 invisible">
                            <div class="flex flex-col justify-center items-center gap-2 group">
                                <div class="bg-black p-3 w-max rounded-full"></div>
                                <span class="text-xs font-mono hidden group-hover:flex">
                                    Hitam
                                </span>
                            </div>
                        </div>
                        <div class="p-2 invisible">
                            <div class="flex flex-col justify-center items-center gap-2 group">
                                <div class="bg-black p-3 w-max rounded-full"></div>
                                <span class="text-xs font-mono hidden group-hover:flex">
                                    Hitam
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-max mt-auto">
                    <div class="flex flex-col gap-2">
                        <form action="" class="grid grid-cols-2 gap-5">
                            @csrf
                            <button class="border-2 border-sky-600 p-4">
                                <span class="font-mono text-sky-600">
                                    Buy Now

                                </span>
                            </button>
                            <button class="bg-sky-600 font-mono text-slate-200">
                                Add to Cart
                            </button>
                        </form>
                        <div class="mt-10 py-6">
                            <a href="" class="font-mono flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                </svg>
                                See All Comments
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
