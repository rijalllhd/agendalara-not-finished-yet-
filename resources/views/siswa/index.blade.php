<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Data Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="overflow-x-scroll">

            <a href="{{ route('siswa.create') }}">
            <button href="" type="button"
                class="float-right bg-green-700 text-white p-2 rounded-md">Tambah
            </button></a>

            <table class="w-full text-sm text-left text-gray-600">
                <thead
                    class="text-xs text-gray-800 uppercase bg-gray-50 dark:bg-gray-700 rounded-md">
                    <tr>
                        <th class="border-collapse border p-2">No</th>
                        <th class="border-collapse border p-2">Nama</th>
                        <th class="border-collapse border p-2">kelas</th>
                        <th class="border-collapse border p-2">nis</th>
                        <th class="border-collapse border p-2">agama</th>
                        <th class="border-collapse border-y border-r-0  p-2">aksi</th>
                        <th class="border-collapse border-y border-l-0 border-r  p-2"></th>
                    </tr>
                </thead>
                <tbody class="bg-gray-300 rounded-md">
                    <?php $i = 1?>
                    @foreach ($siswa as $d)
                    <tr>
                        <td class="p-2">{{ $i++ }}</td>
                        <td class="p-2">{{ $d->nama }}</td>
                        <td class="p-2">{{ $d->kelas->nama_kelas }}</td>
                        <td class="p-2">{{ $d->nis }}</td>
                        <td class="p-2">{{ $d->agama }}</td>
                        <td class="p-2">
                            <form onsubmit="return confirm('Yakin Ingin Menghapus Data Ini?')"
                                action="{{ url('siswa/'.$d->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit"
                                    class="float-right bg-red-500 text-white p-2 rounded-md">Hapus</button>
                            </form>
                        </td>
                        <td class="p-2">
                            <a href="{{ url('siswa/'.$d->id.'/edit') }}"
                                class="bg-green-500 text-white p-2 rounded-md">Ubah</a>
                        </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
