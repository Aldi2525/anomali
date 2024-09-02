<?php

namespace App\Http\Controllers;

use App\Models\AnomaliProteksi;
use Illuminate\Http\Request;

class AnomaliProteksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anomaliProteksis = AnomaliProteksi::all();
        return view('admin.anomaliproteksi.index', compact('anomaliProteksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.anomaliproteksi.create');
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

        AnomaliProteksi::create($validated);

        return redirect()->route('anomaliproteksi.index')
            ->with('success', 'Anomali Proteksi berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anomaliProteksi = AnomaliProteksi::findOrFail($id);
        return view('admin.anomaliproteksi.show', compact('anomaliProteksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anomaliProteksi = AnomaliProteksi::findOrFail($id);
        return view('admin.anomaliproteksi.edit', compact('anomaliProteksi'));
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

        $anomaliProteksi = AnomaliProteksi::findOrFail($id);
        $anomaliProteksi->update($validated);

        return redirect()->route('anomaliproteksi.index')
            ->with('success', 'Anomali Proteksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anomaliProteksi = AnomaliProteksi::findOrFail($id);
        $anomaliProteksi->delete();

        return redirect()->route('anomaliproteksi.index')
            ->with('success', 'Anomali Proteksi berhasil dihapus.');
    }
}