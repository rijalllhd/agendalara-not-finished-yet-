<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = ['kelas_id', 'nama', 'nis', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat', 'jenis_kelamin', 'foto'];
    protected $table = 'siswas';
    // public $timestamps = true;

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
