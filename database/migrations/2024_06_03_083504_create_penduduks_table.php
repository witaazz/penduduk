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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nokk');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Khatolik', 'Protestan', 'Hindu', 'Budha', 'Konghucu']);
            $table->enum('goldar', ['A', 'B', 'O', 'AB', 'Tidak Tahu']);
            $table->enum('pendidikan_terakhir', ['SD', 'SMP', 'SMA', 'Diploma', 'Strata 1', 'Strata 2', 'Strata 3']);
            $table->integer('id_pekerjaan');
            $table->enum('status_pernikahan', ['Menikah', 'Tidak Menikah']);
            $table->integer('id_kelurahan');
            $table->integer('id_kecamatan');
            $table->integer('id_kabupaten');
            $table->integer('id_provinsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
