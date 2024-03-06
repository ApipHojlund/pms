<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_model',
        'model',
        'id_bahan',
        'id_mesin',
        'berat',
        'profit',
        'harga_jual',
        'id_detail'
    ];

    protected $primaryKey = 'id';

    public function Detail()
    {
        return $this->belongsTo(DetailProduksi::class, 'id_detail', 'id');
    }
    public function Bahan()
    {
        return $this->belongsTo(Bahan::class, 'id_bahan', 'id');
    }
    public function Mesin()
    {
        return $this->belongsTo(Mesin::class, 'id_mesin', 'id');
    }
}
