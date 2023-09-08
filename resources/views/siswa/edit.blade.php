@extends('sidebar')

@section('content')
        <!-- content -->
        <div class="flex-1 p-10">
            <nav class="rounded-md px-6 py-4 w-full">
                <ol class="list-reset float-right font-semibold hidden sm:flex">
                    <li><a href="#" class="text-gray-800 hover:text-gray-900">Data</a></li>
                    <li><span class="text-gray-700 mx-2">/</span></li>
                    <li><a href="#" class="text-gray-800 hover:text-gray-900">Obat</a></li>
                </ol>
                <h3 class="font-bold text-lg text-white tracking-wider lg:p-auto">DATA OBAT</h3>
            </nav>

            <div class="h-screen">
                <section class="flex items-center text-gray-600">
                    <div class="container px-5 py-5 mx-auto">
                        <div class="my-1 px-1 w-full">
                            <div class="overflow-hidden rounded-lg shadow-md p-3 bg-slate-200 tracking-wide space-y-2">
                                <h1 class="flex justify-center text-2xl font-semibold">DATA OBAT</h1>
                                <h2 class="flex justify-center text-md">Mohon Mengubah Data Dengan Hati-hati</h2>
                                <br>
                                <form action="{{ url('obat/' .$obat->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="space-y-2">
                                        <label for="nama" class="ml-3 font-medium">Nama Obat</label>
                                        <input type="text" name="nama" id="nama" required value="{{ $obat->nama }}"
                                            class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
                                    </div>
                                    <br>

                                    <div class="space-y-2">
                                        <label for="stok" class="ml-3 font-medium">Ketersediaan Obat</label>
                                        <input type="number" name="stok" id="stok" required value="{{ $obat->stok }}"
                                            class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
                                    </div>
                                    <br>

                                    <div class="space-y-2">
                                        <label for="harga" class="ml-3 font-medium">Harga Obat</label>
                                        <input type="number" name="harga" id="harga" required value="{{ $obat->harga }}"
                                            class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
                                    </div>
                                    <br>

                                    <div class="flex justify-between"><a href="{{ url('obat') }}">
                                        <button type="button" href=""
                                            class="w-48 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg rounded-xl focus:outline-none hover:bg-gray-900 hover:shadow-none">
                                            KEMBALI
                                        </button></a>
                                        <button type="submit"
                                            class="w-48 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg rounded-xl focus:outline-none hover:bg-gray-900 hover:shadow-none"
                                            name="submit">
                                            SIMPAN
                                        </button>
                                    </div>
                                    <br>
                                </form>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- content ends -->
        @endsection
