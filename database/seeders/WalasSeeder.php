<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Walas;

class WalasSeeder extends Seeder
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
                'nig' => '99001111',
                'nama_walas' => 'Rudi Setiawan',
                'kelas_id' => 1,
                'password' => bcrypt('1234')
            ],
            [
                'nig' => '99001122',
                'nama_walas' => 'Tari Melani',
                'kelas_id' => 2,
                'password' => bcrypt('1234')
            ],
        ];

        foreach ($data as $walas) {
            Walas::create($walas);
        }

    }
}
