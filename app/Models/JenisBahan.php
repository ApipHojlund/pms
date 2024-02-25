<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBahan extends Model
{
    use HasFactory;
    protected $fillable = ['tipe'];
    protected $primaryKey = 'id';

    public function JenisBahan()
    {
        return $this->hasMany(JenisBahan::class, 'id_jenis', 'id');
    }
}
