<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nilai;
use Carbon\Carbon; // Untuk mengatur tanggal

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat beberapa contoh data nilai
        Nilai::create([
            'walas_id' => 1,
            'siswa_id' => 1,
            'matematika' => 85,
            'indonesia' => 90,
            'inggris' => 78,
            'kejuruan' => 88,
            'pilihan' => 92,
            'rata_rata' => (85 + 90 + 78 + 88 + 92) / 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Nilai::create([
            'walas_id' => 1,
            'siswa_id' => 2,
            'matematika' => 75,
            'indonesia' => 80,
            'inggris' => 70,
            'kejuruan' => 85,
            'pilihan' => 90,
            'rata_rata' => (75 + 80 + 70 + 85 + 90) / 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Nilai::create([
            'walas_id' => 1,
            'siswa_id' => 3,
            'matematika' => 95,
            'indonesia' => 88,
            'inggris' => 82,
            'kejuruan' => 92,
            'pilihan' => 87,
            'rata_rata' => (95 + 88 + 82 + 92 + 87) / 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
