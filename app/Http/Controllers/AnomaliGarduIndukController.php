<?php
namespace App\Http\Controllers;

use App\Models\AnomaliGarduInduk;
use Illuminate\Http\Request;

class AnomaliGarduIndukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anomaliGarduInduks = AnomaliGarduInduk::all();
        return view('admin.anomaligarduinduk.index', compact('anomaliGarduInduks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.anomaligarduinduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gardu_induk' => 'required|string',
            'bay' => 'required|string',
            'peralatan' => 'required|string',
            'phasa' => 'required|string',
            'permasalahan' => 'required|string',
            'kategori_anomali' => 'required|string',
            'tanggal_temuan' => 'required|date',
            'tanggal_rencana' => 'nullable|date',
            'tanggal_realisasi' => 'nullable|date',
            'anomaly_mayor_minor' => 'required|string',
            'status' => 'nullable|string',
            'data_pendukung' => 'nullable|string',
            'usulan_perbaikan' => 'nullable|string',
            'pelaksana' => 'required|string',
            'perkiraan_kebutuhan_anggaran' => 'nullable|numeric',
            'rab' => 'nullable|string',
            'keterangan' => 'nullable|string',
        ]);

        AnomaliGarduInduk::create($validated);

        return redirect()->route('anomaligarduinduk.index')
            ->with('success', 'Anomali Gardu Induk berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anomaliGarduInduk = AnomaliGarduInduk::findOrFail($id);
        return view('admin.anomaligarduinduk.show', compact('anomaliGarduInduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anomaliGarduInduk = AnomaliGarduInduk::findOrFail($id);
        return view('admin.anomaligarduinduk.edit', compact('anomaliGarduInduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'gardu_induk' => 'required|string',
            'bay' => 'required|string',
            'peralatan' => 'required|string',
            'phasa' => 'required|string',
            'permasalahan' => 'required|string',
            'kategori_anomali' => 'required|string',
            'tanggal_temuan' => 'required|date',
            'tanggal_rencana' => 'nullable|date',
            'tanggal_realisasi' => 'nullable|date',
            'anomaly_mayor_minor' => 'required|string',
            'status' => 'nullable|string',
            'data_pendukung' => 'nullable|string',
            'usulan_perbaikan' => 'nullable|string',
            'pelaksana' => 'required|string',
            'perkiraan_kebutuhan_anggaran' => 'nullable|numeric',
            'rab' => 'nullable|string',
            'keterangan' => 'nullable|string',
        ]);

        $anomaliGarduInduk = AnomaliGarduInduk::findOrFail($id);
        $anomaliGarduInduk->update($validated);

        return redirect()->route('anomaligarduinduk.index')
            ->with('success', 'Anomali Gardu Induk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anomaliGarduInduk = AnomaliGarduInduk::findOrFail($id);
        $anomaliGarduInduk->delete();

        return redirect()->route('anomaligarduinduk.index')
            ->with('success', 'Anomali Gardu Induk berhasil dihapus.');
    }
}