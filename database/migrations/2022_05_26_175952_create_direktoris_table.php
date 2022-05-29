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
        Schema::create('direktoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_sekolah',100);
            $table->string('foto_kepala_sekloah',100);
            $table->string('nama_guru',100);
            $table->string('foto_guru',100);
            $table->string('nama_pegawai',100);
            $table->string('foto_pegawai',100);
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
        Schema::dropIfExists('direktoris');
    }
};
