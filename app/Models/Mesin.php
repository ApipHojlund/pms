<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_mesin',
        'tgl_beli',
        'harga_asli',
        'harga_buku',
        'umur',
        'inflansi',
        'jam_bln',
        'kebutuhan_ruang',
        'by_ruang',
        'daya_mesin',
        'biaya_listrik',
        'biaya_operator',
        'total_biaya',
        'pembulatan_biaya',
    ];
     protected $primaryKey = 'id';

     public function Mesin()
    {
        return $this->hasMany(Mesin::class, 'id_mesin', 'id');
    }
}
