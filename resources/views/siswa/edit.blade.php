edit page ini ja
<form action="{{ url('siswa/' .$siswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="space-y-2">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required value="{{ $siswa->nama }}">
        </div>
        <br>

        <div class="space-y-2">
            <label for="nis">Nis</label>
            <input type="number" name="nis" id="nis" required value="{{ $siswa->nis }}">
        </div>
        <br>

        <div class="space-y-2">
            <label for="jenis_kelamin">jenis_kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                    <option disabled value>--- Pilih Jenis Kelamin ---</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
            </select>
        </div>
        <br>

        <div class="space-y-2">
            <label for="kelas">kelas</label>
            <select id="kelas_id"  name="kelas_id" required>
                    <option disabled value>--- Pilih Kelas ---</option>
                    @foreach ($kelas as $pas)
                    <option value="{{ $pas->id }}">{{ $pas->nama_kelas }}</option>
                    @endforeach
            </select>
        </div>
        <br>

        <div class="space-y-2">
            <label for="tanggal_lahir">tgl lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required value="{{ $siswa->tanggal_lahir }}">
        </div>
        <br>

        <div class="space-y-2">
            <label for="tempat_lahir">tempat_lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" required value="{{ $siswa->tempat_lahir }}">
        </div>
        <br>

        <label for="agama">agama</label>
            <input type="text" name="agama" id="agama" required value="{{ $siswa->agama }}">
        </div>
        <br>

        <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat" required value="{{ $siswa->alamat }}">
        </div>
        <br>

        <label for="foto">foto</label>
            <input type="text" name="foto" id="foto" required value="{{ $siswa->foto }}">
        </div>
        <br>
        

        <div class="flex justify-between"><a href="{{ url('siswa') }}">
            <button type="button" href="{{ route('siswa.index') }}">
                Kembali
            </button></a>
            <button type="submit" name="submit">
                Simpan
            </button>
        </div>
        <br>
</form>