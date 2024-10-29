<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'walas_id',
        'matematika',
        'indonesia',
        'inggris',
        'kejuruan',
        'pilihan',
        'rata_rata'
    ];

    public function siswa()
{
    return $this->belongsTo(Siswa::class);
}


    public function walas() {
        return $this->belongsTo(Walas::class);
    }
}

