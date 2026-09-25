<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim' => '2004199041',
            'nama' => 'Budi',
            'jurusan' => 'Teknik Informatika',
            'email' => 'budi@example.test',
            'angkatan' => 2020,
        ]);

        Mahasiswa::create([
            'nim' => '2004199042',
            'nama' => 'Ani',
            'jurusan' => 'Teknik Informatika',
            'email' => 'ani@example.test',
            'angkatan' => 2020,
        ]);

        Mahasiswa::create([
            'nim' => '2004199043',
            'nama' => 'Cici',
            'jurusan' => 'Teknik Informatika',
            'email' => 'cici@example.test',
            'angkatan' => 2020,
        ]);

        Mahasiswa::create([
            'nim' => '2004199044',
            'nama' => 'Dedi',
            'jurusan' => 'Teknik Informatika',
            'email' => 'dedi@example.test',
            'angkatan' => 2020,
        ]);

        Mahasiswa::create([
            'nim' => '2004199045',
            'nama' => 'Eva',
            'jurusan' => 'Teknik Informatika',
            'email' => 'eva@example.test',
            'angkatan' => 2020,
        ]);
    }
}
