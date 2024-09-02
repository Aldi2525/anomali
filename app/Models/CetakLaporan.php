<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CetakLaporan extends Model
{

    protected $table = 'cetak_laporan';
    protected $fillable = ['judul_laporan', 'deskripsi_laporan', 'tanggal_cetak', 'anomali_gardu_induk_id', 'anomali_proteksi_id', 'anomali_jaringan_id'];

    // Relasi ke Anomali Gardu Induk
    public function anomaliGarduInduk()
    {
        return $this->belongsTo(AnomaliGarduInduk::class, 'anomali_gardu_induk_id');
    }

    // Relasi ke Anomali Proteksi
    public function anomaliProteksi()
    {
        return $this->belongsTo(AnomaliProteksi::class, 'anomali_proteksi_id');
    }

    // Relasi ke Anomali Jaringan
    public function anomaliJaringan()
    {
        return $this->belongsTo(AnomaliJaringan::class, 'anomali_jaringan_id');
    }
}