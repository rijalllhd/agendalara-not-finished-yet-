<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelas_id');
            $table->string('nama');
            $table->bigInteger('nis');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama');
            $table->string('alamat');
            $table->enum('jenis_kelamin',['L','P']);
            $table->timestamps();
        });


        // Insert a new siswa
        DB::table('siswas')->insert([
            'kelas_id' => 1,
            'nama' => 'rizal',
            'nis' => '2122425',
            'tempat_lahir' => 'Pemalang',
            'tanggal_lahir' => '2006-01-14',
            'agama' => 'islam',
            'alamat' => 'cilengsi,gndoang',
            'jenis_kelamin' => 'L',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
