<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnomaliGarduInduk extends Model
{
    use HasFactory;

    protected $table = 'anomali_gardu_induk';

   protected $fillable = [
    'gardu_induk',
    'bay',
    'peralatan',
    'phasa',
    'permasalahan',
    'kategori_anomali',
    'tanggal_temuan',
    'tanggal_rencana',
    'tanggal_realisasi',
    'anomaly_mayor_minor',
    'status',
    'data_pendukung',
    'usulan_perbaikan',
    'pelaksana',
    'perkiraan_kebutuhan_anggaran',
    'rab',
    'keterangan',
];

}