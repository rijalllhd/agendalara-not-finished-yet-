<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
            'nis' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required',
        ],[
            'nama.required'=>'nama Wajib Diisi',
            'kelas_id.required'=>'kelas_id Wajib Diisi',
            'nis.required'=>'nis Wajib Diisi',
            'tempat_lahir.required'=>'tempat_lahir Wajib Diisi',
            'tanggal_lahir.required'=>'tanggal_lahir Wajib Diisi',
            'agama.required'=>'agama Wajib Diisi',
            'alamat.required'=>'alamat Wajib Diisi',
            'jenis_kelamin.required'=>'jenis_kelamin Wajib Diisi',
            'foto.required'=>'foto Wajib Diisi',
        ]);
        $siswa = [
            'nama'=>$request->nama,
            'kelas_id'=>$request->kelas_id,
            'nis'=>$request->nis,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'agama'=>$request->agama,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'foto'=>$request->foto,
        ];
        Siswa::create($siswa);
        return redirect()->to('siswa')->with('success', 'Pastikan kembali jika data yang ditambahkan telah sesuai.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
