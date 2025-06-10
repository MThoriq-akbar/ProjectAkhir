<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'meja_id',
        'nama_pemesan',
        'nohp',
        'tanggal',
        'status'
    ];
    public function meja()
    {
        return $this->belongsTo(Meja::class, 'meja_id');
    }
}
