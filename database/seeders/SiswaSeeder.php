<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nis' => '1224001',
                'nama_siswa' => 'Arya',
                'kelas_id' => 1,
                'password' => bcrypt('1224001')
            ],
            [
                'nis' => '1224002',
                'nama_siswa' => 'Amelia',
                'kelas_id' => 1,
                'password' => bcrypt('1224002')
            ],
            [
                'nis' => '1224003',
                'nama_siswa' => 'Beka',
                'kelas_id' => 1,
                'password' => bcrypt('1224003')
            ],
            [
                'nis' => '1224004',
                'nama_siswa' => 'Aji',
                'kelas_id' => 2,
                'password' => bcrypt('1224004')
            ],
            [
                'nis' => '1224005',
                'nama_siswa' => 'Chiko',
                'kelas_id' => 2,
                'password' => bcrypt('1224005')
            ],
            [
                'nis' => '1224006',
                'nama_siswa' => 'Eza',
                'kelas_id' => 2,
                'password' => bcrypt('1224006')
            ],

        ];

        foreach ($data as $siswa) {
            Siswa::create($siswa);
        }
    }
}
