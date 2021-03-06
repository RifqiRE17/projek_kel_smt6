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
        Schema::create('aboutstarts', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100);
            $table->longText('isi');
            $table->string('gambar1',100);
            $table->string('gambar2',100);
            $table->string('gambar3',100);
            $table->string('gambar4',100);
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
        Schema::dropIfExists('aboutstarts');
    }
};
