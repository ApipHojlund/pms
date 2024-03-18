<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'note',
        'id_pemesan',
        'jumlah_produksi',
        'status',
        'waktu',
        'id_produksi',
        'kode_pesanan',
        'petugas',
    ];

    protected $primaryKey = 'id';

    /**
     * Get the user that owns the Pesanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function Pemesan()
    {
        return $this->belongsTo(User::class, 'id_pemesan', 'id');
    }
    public function Petugas()
    {
        return $this->belongsTo(User::class, 'petugas', 'id');
    }
    public function Produksi()
    {
        return $this->belongsTo(Produksi::class, 'id_produksi', 'id');
    }
    public function Detail()
    {
        return $this->hasMany(DetailProduksi::class, 'id_detail', 'id');
    }
    public function Pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'kode_pesanan', 'id');
    }
}
