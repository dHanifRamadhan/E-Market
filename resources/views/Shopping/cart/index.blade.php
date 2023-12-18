@extends('layouts.app')
@section('main')
    <div class="py-16">
        <div class="w-max mx-auto p-10 bg-sky-600 rounded-md">
            <div class="flex flex-col">
                <span class="text-2xl text-white border-b-2 border-slate-200 w-max font-mono pb-1 pr-3">
                    Shopping Cart
                </span>
                <div class="mt-2 flex">
                    <span class="font-mono text-sm text-white">
                        2 items
                    </span>
                    <div class="w-max ml-auto flex gap-4 items-center">
                        <button type="button" onclick="Edit()"
                            class="flex justify-end text-white font-mono gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-cog"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" />
                                <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19.001 15.5v1.5" />
                                <path d="M19.001 21v1.5" />
                                <path d="M22.032 17.25l-1.299 .75" />
                                <path d="M17.27 20l-1.3 .75" />
                                <path d="M15.97 17.25l1.3 .75" />
                                <path d="M20.733 20l1.3 .75" />
                            </svg>
                            Edit
                        </button>
                        <form action="">
                            @csrf
                            <button type="submit" class="font-mono text-white hidden gap-1" id="btnDelete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                                <span>
                                    Delete
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="grid gap-2 mt-10">
                <div class="py-2 border-b-2 border-white flex">
                    <img src="https://placehold.co/120x120" alt="" width="120px" height="120px" class="rounded-sm">
                    <div class="px-5 w-[58rem] flex flex-col">
                        <span class="text-white font-mono">
                            Nama
                        </span>
                        <p class="font-mono text-slate-200 mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde labore corporis, reprehenderit eum
                            aliquid magni odit porro voluptatum? Asperiores accusantium, dicta accusamus eaque quae vel
                            minus quia suscipit eius iusto.
                        </p>
                        <div class="mt-4 flex">
                            <form class="font-mono text-white flex gap-2 items-center">
                                <span>
                                    Rp
                                </span>
                                <input type="text" value="2000000" class="bg-transparent border-0 text-lg p-0"
                                    name="price" id="price" disabled>
                            </form>
                            <div class="w-max ml-auto flex justify-end scale-90">
                                <button class="bg-slate-200 px-4 rounded-l-md" id="plus" onclick="Plus()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                </button>
                                <input type="text" class="outline-none border-0 w-20 bg-slate-100 text-center"
                                    value="1" id="outputQty" disabled>
                                <button class="bg-slate-200 px-4 rounded-r-md" id="minus" onclick="Minus()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-minus"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden items-center justify-center px-5" id="checkBox">
                        <input type="checkbox" name="" id="">
                    </div>
                </div>
                <div class="flex justify-end gap-3 mt-2">
                    <form action="">
                        @csrf
                        @method('delete')
                        <button
                            class="py-2 px-5 border-2 border-slate-200 rounded-lg text-slate-200 bg-sky-500 hover:bg-blue-500 font-mono">
                            Check Out
                        </button>
                    </form>
                    <a href="{{ route('dashboard') }}"
                        class="py-2 px-4 border-2 border-slate-200 rounded-lg text-slate-200 bg-sky-500 hover:bg-blue-500 font-mono">
                        Close
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function Plus() {
            var outputQty = document.getElementById('outputQty');
            var currentQty = parseInt(outputQty.value);
            var outputPrice = document.getElementById('price');
            // Tambahkan 1 ke nilai saat ini
            if (currentQty < 2) {
                var qty = currentQty + 1;
                outputQty.value = qty;
                outputPrice.value = 2000000 * qty;
            }
        }

        function Minus() {
            var outputQty = document.getElementById('outputQty');
            var currentQty = parseInt(outputQty.value);
            var outputPrice = document.getElementById('price');
            var price = parseInt(outputPrice.value);
            // Kurangkan 1 dari nilai saat ini, tetapi pastikan tidak kurang dari 0
            var qty = currentQty - 1;
            outputQty.value = Math.max(qty, 1);
            outputPrice.value = price / currentQty;
        }

        function Edit() {
            var checkBox = document.getElementById('checkBox')
            var deleteButton = document.getElementById('btnDelete')

            if (checkBox.classList.contains('hidden') || deleteButton.classList.contains('hidden')) {
                checkBox.classList.remove('hidden')
                deleteButton.classList.remove('hidden')
                checkBox.classList.add('flex')
                deleteButton.classList.add('flex')
            } else {
                checkBox.classList.remove('flex')
                deleteButton.classList.remove('flex')
                checkBox.classList.add('hidden')
                deleteButton.classList.add('hidden')
            }
        }
    </script>
@endsection
