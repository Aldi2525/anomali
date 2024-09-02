@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Edit Anomali Jaringan
                </div>
                <div class="card-body">
                    <form action="{{ route('anomalijaringan.update', $anomaliJaringan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="penghantar">Penghantar</label>
                            <input type="text" name="penghantar" id="penghantar" class="form-control"
                                value="{{ $anomaliJaringan->penghantar }}" required>
                        </div>
                        <div class="form-group">
                            <label for="spantower">Span/Tower</label>
                            <input type="text" name="spantower" id="spantower" class="form-control"
                                value="{{ $anomaliJaringan->spantower }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phasa">Phasa</label>
                            <input type="text" name="phasa" id="phasa" class="form-control"
                                value="{{ $anomaliJaringan->phasa }}" required>
                        </div>
                        <div class="form-group">
                            <label for="peralatan">Peralatan</label>
                            <input type="text" name="peralatan" id="peralatan" class="form-control"
                                value="{{ $anomaliJaringan->peralatan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="permasalahan">Permasalahan</label>
                            <textarea name="permasalahan" id="permasalahan" class="form-control" rows="4" required>{{ $anomaliJaringan->permasalahan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategori_anomali">Kategori Anomali</label>
                            <input type="text" name="kategori_anomali" id="kategori_anomali" class="form-control"
                                value="{{ $anomaliJaringan->kategori_anomali }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_temuan">Tanggal Temuan</label>
                            <input type="date" name="tanggal_temuan" id="tanggal_temuan" class="form-control"
                                value="{{ $anomaliJaringan->tanggal_temuan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_rencana">Tanggal Rencana</label>
                            <input type="date" name="tanggal_rencana" id="tanggal_rencana" class="form-control"
                                value="{{ $anomaliJaringan->tanggal_rencana }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_realisasi">Tanggal Realisasi</label>
                            <input type="date" name="tanggal_realisasi" id="tanggal_realisasi" class="form-control"
                                value="{{ $anomaliJaringan->tanggal_realisasi }}">
                        </div>
                        <div class="form-group">
                            <label for="anomaly_mayor_minor">Anomaly Mayor/Minor</label>
                            <input type="text" name="anomaly_mayor_minor" id="anomaly_mayor_minor" class="form-control"
                                value="{{ $anomaliJaringan->anomaly_mayor_minor }}" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" id="status" class="form-control"
                                value="{{ $anomaliJaringan->status }}">
                        </div>
                        <div class="form-group">
                            <label for="data_pendukung">Data Pendukung</label>
                            <textarea name="data_pendukung" id="data_pendukung" class="form-control" rows="2">{{ $anomaliJaringan->data_pendukung }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="usulan_perbaikan">Usulan Perbaikan</label>
                            <textarea name="usulan_perbaikan" id="usulan_perbaikan" class="form-control" rows="2">{{ $anomaliJaringan->usulan_perbaikan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="pelaksana">Pelaksana</label>
                            <input type="text" name="pelaksana" id="pelaksana" class="form-control"
                                value="{{ $anomaliJaringan->pelaksana }}" required>
                        </div>
                        <div class="form-group">
                            <label for="perkiraan_kebutuhan_anggaran">Perkiraan Kebutuhan Anggaran</label>
                            <input type="number" name="perkiraan_kebutuhan_anggaran" id="perkiraan_kebutuhan_anggaran"
                                class="form-control" value="{{ $anomaliJaringan->perkiraan_kebutuhan_anggaran }}">
                        </div>
                        <div class="form-group">
                            <label for="rab">RAB</label>
                            <input type="text" name="rab" id="rab" class="form-control"
                                value="{{ $anomaliJaringan->rab }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" rows="2">{{ $anomaliJaringan->keterangan }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('anomalijaringan.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
