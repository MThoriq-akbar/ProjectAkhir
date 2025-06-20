<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'no_meja','jumlah_kursi','jenis_meja','status_meja'
    ];
}
