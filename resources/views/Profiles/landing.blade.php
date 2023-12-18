@extends('layouts.app')
@section('main')
    <div class="h-full pt-20 max-lg:hidden lg:flex">
        <div class="w-max h-max mx-auto grid grid-cols-4 gap-5">
            <div class="flex flex-col gap-5 py-5 w-56 row-span-full bg-sky-600 rounded-md">
                <div class="flex items-center justify-center">
                    <img src="https://placehold.co/150x150" alt="" width="150px" height="150px" class="rounded-full">
                </div>
                <div class="flex justify-center">
                    <span class="w-32 text-center font-mono text-slate-200">Dhaifullah Hanif Ramadhan</span>
                </div>
                <form class="mt-3 flex items-center justify-center flex-col gap-4">
                    @csrf
                    <button
                        class="border-2 border-slate-300 py-2 px-5 text-slate-300 flex gap-2 text-xs items-center justify-center rounded-md hover:text-white hover:border-white hover:bg-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                            width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                        </svg>
                        <span class="font-mono">
                            Add Friend
                        </span>
                    </button>
                    <a href=""
                        class="mb-10 border-2 border-slate-300 py-2 px-8 text-slate-300 flex gap-2 text-xs items-center justify-center rounded-md hover:text-white hover:border-white hover:bg-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="16"
                            height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        <span>
                            Friends
                        </span>
                    </a>
                </form>
            </div>
            <div class="bg-sky-600 col-span-3 rounded-md border p-8">
                <div class="flex flex-col">
                    <span class="text-white font-mono font-bold text-lg border-b-2 w-max pr-2">
                        Contact
                    </span>
                    <div class="grid grid-cols-2 gap-3 mt-2">
                        <div class="flex gap-2 items-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                            <span>
                                d.haniframadhan@gmail.com
                            </span>
                        </div>
                        <div class="flex gap-2 items-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                            <span>
                                +62 896-3807-0331
                            </span>
                        </div>
                        <div class="flex gap-2 items-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                            <span class="w-72">
                                Jl. Ibnu Armah No.76 RT.001/RW.04 PangkalanJati Baru Kecamatan Cinere Kota Depok 16513
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <span class="text-lg font-mono font-bold text-slate-200 border-b-2 border-slate pr-2">
                        Roles
                    </span>
                    <div class="flex items-center gap-4 mt-2">
                        <div
                            class="border-2 border-slate-200 py-2 px-4 flex flex-col gap-2 items-center justify-center text-white rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-crown"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z" />
                            </svg>
                            <span class="font-mono">
                                Admin
                            </span>
                        </div>
                        <div
                            class="border-2 border-slate-200 py-2 px-4 flex flex-col gap-2 items-center justify-center text-white rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l18 0" />
                                <path
                                    d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                                <path d="M5 21l0 -10.15" />
                                <path d="M19 21l0 -10.15" />
                                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                            </svg>
                            <span class="font-mono text-sm">
                                Seller
                            </span>
                        </div>
                        <div
                            class="border-2 border-slate-200 py-2 px-4 flex flex-col gap-2 items-center justify-center text-white rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                            </svg>
                            <span class="font-mono text-sm">
                                Buyer
                            </span>
                        </div>
                        <div
                            class="border-2 border-slate-200 py-2 px-4 flex flex-col gap-2 items-center justify-center text-white rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-scooter-electric"
                                width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M8 17h5a6 6 0 0 1 5 -5v-5a2 2 0 0 0 -2 -2h-1" />
                                <path d="M10 4l-2 4h3l-2 4" />
                            </svg>
                            <span class="font-mono text-sm">
                                Seller
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mt-10 flex items-center justify-center">
                    {{-- <a href="" class="border-2 h-full px-44 py-2 border-slate-200 rounded-md">
                        <span class="font-mono text-white">
                            Visit this Store
                        </span>
                    </a> --}}
                    <span class="border-2 h-full px-44 py-2 border-red-500 font-mono text-red-500 bg-slate-300 rounded-md">
                        User has not created a store
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
