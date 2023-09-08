<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Tambah Data Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="overflow-x-scroll">

        <form action="{{ url('siswa') }}" method="post">
            @csrf
            <div class="space-y-2">
                <label for="nama" class="ml-3 font-medium">Nama Siswa</label>
                <input type="text" name="nama" id="nama" required value="{{ Session::get
                    ('nama') }}"
                    class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
            </div>

            <select id="kelas_id"  name="kelas_id" required
                class="block w-full p-3 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
                <option value>Pilih Kelas</option>
                <br>
                @foreach ($kelas as $pas)
                <option value="{{ $pas->id }}">{{ $pas->nama_kelas }}</option>
                @endforeach
            </select>

            <div class="space-y-2">
                <input type="number" name="nis" id="nis" placeholder="nis" required value="{{ Session::get('nis') }}"
                    class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
            </div>

            <div class="space-y-2">
                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" required value="{{ Session::get('tempat_lahir') }}"
                    class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
            </div>

            <div class="space-y-2">
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" required value="{{ Session::get
                    ('tanggal_lahir') }}"
                    class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
            </div>

            <div class="space-y-2">
                <input type="text" name="agama" id="agama" placeholder="agama" required value="{{ Session::get
                    ('agama') }}"
                    class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
            </div>

            <div class="space-y-2">
                <input type="text" name="alamat" id="alamat" placeholder="alamat" required value="{{ Session::get
                    ('alamat') }}"
                    class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
            </div>

            <select id="jenis_kelamin" name="jenis_kelamin"
                class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
                    <option disabled value>pilih gender</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
            </select>

            <div class="space-y-2">
                <input type="text" name="foto" id="foto" placeholder="foto" required value="{{ Session::get
                    ('foto') }}"
                    class="block w-full p-2 mt-2 rounded-xl text-gray-900 bg-stone-50 appearance-none focus:outline-gray-800 focus:bg-gray-100 focus:shadow-inner">
            </div>
            

            

            

            <div class="flex justify-center">
                <button type="submit"
                    class="w-48 py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg rounded-xl focus:outline-none hover:bg-gray-900 hover:shadow-none"
                    name="submit">
                    SIMPAN
                </button>
            </div>
            <br>
        </form>
        </div>
    </div>

</x-app-layout>
