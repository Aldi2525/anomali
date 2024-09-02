<?php

namespace App\Http\Controllers;

use App\Exports\CetakLaporanExport;
use App\Models\CetakLaporan;
use App\Models\AnomaliGarduInduk;
use App\Models\AnomaliProteksi;
use App\Models\AnomaliJaringan;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Http\Request;

class CetakLaporanController extends Controller
{
    public function index()
{
    // Fetch all reports
    $cetakLaporans = CetakLaporan::all();

    // Pass the reports to the view
    return view('admin.cetaklaporan.index', compact('cetakLaporans'));
}
    public function create()
    {
        // Ambil data dari tabel terkait
        $anomaliGarduInduks = AnomaliGarduInduk::all();
        $anomaliProteksis = AnomaliProteksi::all();
        $anomaliJaringans = AnomaliJaringan::all();

        // Kirim data ke view
        return view('admin.cetaklaporan.create', compact('anomaliGarduInduks', 'anomaliProteksis', 'anomaliJaringans'));
    }

    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'judul_laporan' => 'required|string|max:255',
            'deskripsi_laporan' => 'nullable|string',
            'tanggal_cetak' => 'required|date',
            'anomali_type' => 'required|string|in:gardu_induk,proteksi,jaringan',
            'anomali_gardu_induk_id' => 'nullable|exists:anomali_gardu_induks,id',
            'anomali_proteksi_id' => 'nullable|exists:anomali_proteksis,id',
            'anomali_jaringan_id' => 'nullable|exists:anomali_jaringans,id',
        ]);

        // Siapkan data untuk disimpan
        $data = $request->only('judul_laporan', 'deskripsi_laporan', 'tanggal_cetak');

        // Tambahkan ID berdasarkan tipe anomali yang dipilih
        if ($request->anomali_type === 'gardu_induk') {
            $data['anomali_gardu_induk_id'] = $request->anomali_gardu_induk_id;
        } elseif ($request->anomali_type === 'proteksi') {
            $data['anomali_proteksi_id'] = $request->anomali_proteksi_id;
        } elseif ($request->anomali_type === 'jaringan') {
            $data['anomali_jaringan_id'] = $request->anomali_jaringan_id;
        }

        // Simpan data ke dalam tabel CetakLaporan
        CetakLaporan::create($data);

        return redirect()->route('cetaklaporan.index')->with('success', 'Laporan berhasil ditambahkan.');
    }

    public function export($format, $id)
{
    // Fetch the specific report
    $laporan = CetakLaporan::find($id);

    // Check if the report exists
    if (!$laporan) {
        return redirect()->back()->with('error', 'Laporan not found');
    }

    // Determine the export format
    switch ($format) {
        case 'excel':
            return Excel::download(new CetakLaporanExport($laporan), $laporan->judul_laporan . '.xlsx');
        case 'pdf':
            $pdf = Pdf::loadView('admin.cetaklaporan.pdf', compact('laporan'));
            return $pdf->download($laporan->judul_laporan . '.pdf');
        case 'doc':
            // Use a Word export library or generate a DOC file manually
            break;
        case 'csv':
            return Excel::download(new CetakLaporanExport($laporan), $laporan->judul_laporan . '.csv');
        default:
            return redirect()->back()->with('error', 'Invalid format');
    }
}
}