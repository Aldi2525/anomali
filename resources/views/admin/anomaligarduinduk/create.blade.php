@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Anomali Gardu Induk
                </div>
                <div class="card-body">
                    <form action="{{ route('anomaligarduinduk.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gardu_induk"><i class="fas fa-building"></i> Gardu Induk</label>
                                    <input type="text" class="form-control" id="gardu_induk" name="gardu_induk">required
                                </div>
                                <div class="form-group">
                                    <label for="bay"><i class="fas fa-box"></i> Bay</label>
                                    <input type="text" class="form-control" id="bay" name="bay" required>
                                </div>
                                <div class="form-group">
                                    <label for="peralatan"><i class="fas fa-tools"></i> Peralatan</label>
                                    <input type="text" class="form-control" id="peralatan" name="peralatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="phasa"><i class="fas fa-plug"></i> Phasa</label>
                                    <input type="text" class="form-control" id="phasa" name="phasa" required>
                                </div>
                                <div class="form-group">
                                    <label for="permasalahan"><i class="fas fa-exclamation-circle"></i> Permasalahan</label>
                                    <textarea class="form-control" id="permasalahan" name="permasalahan" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kategori_anomali"><i class="fas fa-tag"></i> Kategori Anomali</label>
                                    <input type="text" class="form-control" id="kategori_anomali" name="kategori_anomali"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_temuan"><i class="fas fa-calendar-day"></i> Tanggal Temuan</label>
                                    <input type="date" class="form-control" id="tanggal_temuan" name="tanggal_temuan"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_rencana"><i class="fas fa-calendar-alt"></i> Tanggal Rencana</label>
                                    <input type="date" class="form-control" id="tanggal_rencana" name="tanggal_rencana">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_realisasi"><i class="fas fa-calendar-check"></i> Tanggal
                                        Realisasi</label>
                                    <input type="date" class="form-control" id="tanggal_realisasi"
                                        name="tanggal_realisasi">
                                </div>
                                <div class="form-group">
                                    <label for="anomaly_mayor_minor"><i class="fas fa-exclamation-triangle"></i> Anomaly
                                        Mayor/Minor</label>
                                    <input type="text" class="form-control" id="anomaly_mayor_minor"
                                        name="anomaly_mayor_minor" required>
                                </div>
                                <div class="form-group">
                                    <label for="status"><i class="fas fa-clipboard-list"></i> Status</label>
                                    <input type="text" class="form-control" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label for="data_pendukung"><i class="fas fa-file-alt"></i> Data Pendukung</label>
                                    <textarea class="form-control" id="data_pendukung" name="data_pendukung"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="usulan_perbaikan"><i class="fas fa-wrench"></i> Usulan Perbaikan</label>
                                    <textarea class="form-control" id="usulan_perbaikan" name="usulan_perbaikan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="pelaksana"><i class="fas fa-user"></i> Pelaksana</label>
                                    <input type="text" class="form-control" id="pelaksana" name="pelaksana" required>
                                </div>
                                <div class="form-group">
                                    <label for="perkiraan_kebutuhan_anggaran"><i class="fas fa-calculator"></i> Perkiraan
                                        Kebutuhan Anggaran</label>
                                    <input type="number" class="form-control" id="perkiraan_kebutuhan_anggaran"
                                        name="perkiraan_kebutuhan_anggaran" step="0.01">
                                </div>
                                <div class="form-group">
                                    <label for="rab"><i class="fas fa-file-invoice"></i> RAB</label>
                                    <input type="text" class="form-control" id="rab" name="rab">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan"><i class="fas fa-info"></i> Keterangan</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
