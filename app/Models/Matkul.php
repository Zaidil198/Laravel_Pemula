<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    protected $fillable = [
        'kode_matakuliah',
        'nama_matakuliah',
        'dosen',
        'SKS', 
    ];

    protected function casts(): array
    {
        return [
            'SKS' => 'integer',
        ];
    }
}