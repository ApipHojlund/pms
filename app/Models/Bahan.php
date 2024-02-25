<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ukuran_x',
        'ukuran_y',
        'ukuran_z',
        'berat',
        'harga_bahan',
        'id_jenis',
    ];

    protected $primaryKey = 'id';

    public function JenisBahan()
    {
        return $this->belongsTo(JenisBahan::class, 'id_jenis', 'id');
    }

    public function Bahan()
    {
        return $this->hasMany(Bahan::class, 'id_bahan', 'id');
    }
}
