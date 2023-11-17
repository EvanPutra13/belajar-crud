<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->DB::insert([
            'nis' => '111',
            'nama' =>'epanajah',
            'kelas' => 'XA',
            'jurusan' => 'rpl',
            'jk' => 'perempuan',
        ]);
    }
}
