<?php

namespace App\Http\Controllers;

use App\Models\AnomaliJaringan;
use Illuminate\Http\Request;

class AnomaliJaringanController extends Controller
{
    public function index()
    {
        $anomaliJaringan = AnomaliJaringan::all();
        return view('admin.anomalijaringan.index', compact('anomaliJaringan'));
    }

    public function create()
    {
        return view('admin.anomalijaringan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'penghantar' => 'required|string',
            'spantower' => 'required|string',
            'phasa' => 'required|string',
            'peralatan' => 'required|string',
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
            'perkiraan_kebutuhan_anggaran' => 'nullable|integer',
            'rab' => 'nullable|string',
            'keterangan' => 'nullable|string',
        ]);

        AnomaliJaringan::create($request->all());

        return redirect()->route('anomalijaringan.index')->with('success', 'Anomali Jaringan created successfully.');
    }

    public function show($id)
    {
        $anomaliJaringan = AnomaliJaringan::findOrFail($id);
        return view('admin.anomalijaringan.show', compact('anomaliJaringan'));
    }

    public function edit($id)
    {
        $anomaliJaringan = AnomaliJaringan::findOrFail($id);
        return view('admin.anomalijaringan.edit', compact('anomaliJaringan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'penghantar' => 'required|string',
            'spantower' => 'required|string',
            'phasa' => 'required|string',
            'peralatan' => 'required|string',
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
            'perkiraan_kebutuhan_anggaran' => 'nullable|integer',
            'rab' => 'nullable|string',
            'keterangan' => 'nullable|string',
        ]);

        $anomaliJaringan = AnomaliJaringan::findOrFail($id);
        $anomaliJaringan->update($request->all());

        return redirect()->route('anomalijaringan.index')->with('success', 'Anomali Jaringan updated successfully.');
    }

    public function destroy($id)
    {
        $anomaliJaringan = AnomaliJaringan::findOrFail($id);
        $anomaliJaringan->delete();

        return redirect()->route('anomalijaringan.index')->with('success', 'Anomali Jaringan deleted successfully.');
    }
}