<?php
namespace App\Exports;

use App\Models\CetakLaporan;
use Maatwebsite\Excel\Concerns\FromCollection;

class CetakLaporanExport implements FromCollection
{
    protected $laporan;

    public function __construct($laporan)
    {
        $this->laporan = $laporan;
    }

    public function collection()
    {
        return collect([
            [
                'Judul Laporan' => $this->laporan->judul_laporan,
                'Deskripsi' => $this->laporan->deskripsi_laporan,
                'Tanggal Cetak' => $this->laporan->tanggal_cetak,
                'Anomali Terkait' => $this->getAnomaliTerkait(),
            ],
        ]);
    }

    private function getAnomaliTerkait()
    {
        if ($this->laporan->anomali_gardu_induk_id) {
            return 'Gardu Induk: ' . $this->laporan->anomaliGarduInduk->gardu_induk;
        } elseif ($this->laporan->anomali_proteksi_id) {
            return 'Proteksi: ' . $this->laporan->anomaliProteksi->proteksi;
        } elseif ($this->laporan->anomali_jaringan_id) {
            return 'Jaringan: ' . $this->laporan->anomaliJaringan->jaringan;
        } else {
            return '-';
        }
    }
}