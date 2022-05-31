<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap',100);
            $table->string('nama_panggilan',100);
            $table->string('alamat',100);
            $table->string('tempat_tanggal_lahir',100);
            $table->string('pesan',100);
            $table->string('ijazah_tk',100);
            $table->string('akta_kelahiran',100);
            $table->string('ktp_orang_tua',100);
            $table->string('kartu_keluarga',100);
            $table->string('sertifikat_penghargaan',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppdb');
    }
};
