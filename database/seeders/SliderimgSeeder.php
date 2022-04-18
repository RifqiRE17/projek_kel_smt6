<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderimgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\sliderimg::insert([

            'judul' => 'Administrasi SD',
            'isi' => 'Administrasi SD akan dilakukan pada tanggal',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ]);
    }
}
