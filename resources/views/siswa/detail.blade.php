detail siswa
<br>
nama : {{ $siswa->nama }}
<br>
nis : {{ $siswa->nis }}<br>
kelas : {{ $siswa->kelas->nama_kelas }}<br>
jk : @if  ( $siswa->jenis_kelamin == "L" )
    Laki-laki
@else
    Perempuan
@endif
<br>
agama : {{ $siswa->agama }}<br>
alamat : {{ $siswa->alamat }}<br>
tempat lahir : {{ $siswa->tempat_lahir }}<br>
tgl lahir : {{ $siswa->tanggal_lahir }}<br>

<a href="{{ route('siswa.index') }}">kembali</a>