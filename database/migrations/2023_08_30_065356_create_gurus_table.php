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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('inisial');
            $table->enum('jenis_kelamin',['L','P']);
            $table->bigInteger('no_telp');
            $table->string('foto');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamps();
        });

        // Hash the password before storing it
        $hashedPassword = Hash::make('guru123');

        // Insert a new dokter
        DB::table('gurus')->insert([
            'name' => 'guru satu',
            'inisial' => 'GS',
            'jenis_kelamin' => 'P',
            'no_telp' => '0888',
            'foto' => 'guru.jpg',
            'email' => 'Guru@gmail.com',
            'password' => $hashedPassword,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
