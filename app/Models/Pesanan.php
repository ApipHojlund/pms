<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'note',
        'model',
        'id_pemesan',
        'berat',
        'id_bahan',
        'jumlah',
        'nama_model',
        'status',
    ];

    protected $primaryKey = 'id';

    /**
     * Get the user that owns the Pesanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Bahan()
    {
        return $this->belongsTo(Bahan::class, 'id_bahan', 'id');
    }
    public function Pemesan()
    {
        return $this->belongsTo(User::class, 'id_pemesan', 'id');
    }
}
