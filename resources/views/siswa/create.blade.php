<div id="createModal" class=" inset-0 flex items-center justify-center bg-black bg-opacity-50   ">
        <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-end">
            <button id="cancelcreate"
                class="mr-2 px-3 font-medium py-1 bg-gray-50 text-gray-700 rounded-xl hover:bg-gray-600 hover:text-gray-100 shadow">X</button>
        </div>
        <p class="flex justify-center font-medium text-lg">TAMBAH DATA</p>
        <p class="flex justify-center font-light text-sm mb-4">Tambahlah data dengan informasi yang sebenar-benarnya</p>
            <form action="{{ url('siswa') }}" method="post" class="px-4 py-2 left-1/2" >
                @csrf
                <label for="" class="right-2 mb-1">NIS</label><br>
                    <input type="number" name="nis" id="nis" required value="{{ Session::get('nis') }}" placeholder="Nomor Induk Siswa" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Nama</label><br>
                    <input type="text" name="nama" id="nama" required value="{{ Session::get
                    ('nama') }}" placeholder="Nama Siswa" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Jenis Kelamin</label><br>
                    <select id="jenis_kelamin" name="jenis_kelamin"
                        class="p-2 w-full bg-slate-100 rounded-md mb-3">
                            <option disabled value>--- Pilih Jenis Kelamin ---</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                    </select>

                <label for="" class="right-2 mb-1">Kelas</label><br>
                    <select id="kelas_id"  name="kelas_id" required
                        class="p-2 w-full bg-slate-100 rounded-md mb-3">
                            <option disabled value>--- Pilih Kelas ---</option>
                            @foreach ($kelas as $pas)
                            <option value="{{ $pas->id }}">{{ $pas->nama_kelas }}</option>
                            @endforeach
                    </select>

                <label for="" class="right-2 mb-1">Tempat Lahir</label><br>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" required value="{{ Session::get
                    ('tempat_lahir') }}" placeholder="Tempat Lahir" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Tanggal Lahir</label><br>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required value="{{ Session::get
                    ('tanggal_lahir') }}" placeholder="Tanggal Lahir" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Agama</label><br>
                    <input type="text" name="agama" id="agama" required value="{{ Session::get
                    ('agama') }}" placeholder="Agama" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                    <label for="" class="right-2 mb-1">Alamat</label><br>
                    <input type="text" name="alamat" id="alamat" required value="{{ Session::get
                    ('alamat') }}" placeholder="Alamat" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                    <div class="flex justify-center">
                        <button id="confirmcreate" type="submit"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700 hover:text-gray-100">SIMPAN</button>
                    </div>
            </form>
        </div>
    </div>