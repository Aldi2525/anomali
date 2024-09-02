@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-plus-circle"></i> Tambah Anomali Proteksi
                </div>
                <div class="card-body">
                    <form action="{{ route('anomaliproteksi.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Kolom Kiri -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gardu_induk"><i class="fas fa-bolt"></i> Gardu Induk</label>
                                    <input type="text" class="form-control" id="gardu_induk" name="gardu_induk" required>
                                </div>
                                <div class="form-group">
                                    <label for="bay"><i class="fas fa-warehouse"></i> Bay</label>
                                    <input type="text" class="form-control" id="bay" name="bay" required>
                                </div>
                                <div class="form-group">
                                    <label for="peralatan"><i class="fas fa-tools"></i> Peralatan</label>
                                    <input type="text" class="form-control" id="peralatan" name="peralatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="phasa"><i class="fas fa-wave-square"></i> Phasa</label>
                                    <input type="text" class="form-control" id="phasa" name="phasa" required>
                                </div>
                                <div class="form-group">
                                    <label for="permasalahan"><i class="fas fa-exclamation-triangle"></i>
                                        Permasalahan</label>
                                    <textarea class="form-control" id="permasalahan" name="permasalahan" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kategori_anomali"><i class="fas fa-list"></i> Kategori Anomali</label>
                                    <input type="text" class="form-control" id="kategori_anomali" name="kategori_anomali"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_temuan"><i class="fas fa-calendar-alt"></i> Tanggal Temuan</label>
                                    <input type="date" class="form-control" id="tanggal_temuan" name="tanggal_temuan"
                                        required>
                                </div>
                            </div>
                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_rencana"><i class="fas fa-calendar-day"></i> Tanggal Rencana</label>
                                    <input type="date" class="form-control" id="tanggal_rencana" name="tanggal_rencana">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_realisasi"><i class="fas fa-calendar-check"></i> Tanggal
                                        Realisasi</label>
                                    <input type="date" class="form-control" id="tanggal_realisasi"
                                        name="tanggal_realisasi">
                                </div>
                                <div class="form-group">
                                    <label for="anomaly_mayor_minor"><i class="fas fa-exchange-alt"></i> Anomaly
                                        Mayor/Minor</label>
                                    <input type="text" class="form-control" id="anomaly_mayor_minor"
                                        name="anomaly_mayor_minor" required>
                                </div>
                                <div class="form-group">
                                    <label for="status"><i class="fas fa-tasks"></i> Status</label>
                                    <input type="text" class="form-control" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label for="data_pendukung"><i class="fas fa-folder"></i> Data Pendukung</label>
                                    <textarea class="form-control" id="data_pendukung" name="data_pendukung" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="usulan_perbaikan"><i class="fas fa-tools"></i> Usulan Perbaikan</label>
                                    <textarea class="form-control" id="usulan_perbaikan" name="usulan_perbaikan" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="pelaksana"><i class="fas fa-user"></i> Pelaksana</label>
                                    <input type="text" class="form-control" id="pelaksana" name="pelaksana" required>
                                </div>
                                <div class="form-group">
                                    <label for="perkiraan_kebutuhan_anggaran"><i class="fas fa-money-bill-wave"></i>
                                        Perkiraan Kebutuhan Anggaran</label>
                                    <input type="number" class="form-control" id="perkiraan_kebutuhan_anggaran"
                                        name="perkiraan_kebutuhan_anggaran">
                                </div>
                                <div class="form-group">
                                    <label for="rab"><i class="fas fa-file-invoice-dollar"></i> RAB</label>
                                    <input type="text" class="form-control" id="rab" name="rab">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan"><i class="fas fa-info-circle"></i> Keterangan</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        <a href="{{ route('anomaliproteksi.index') }}" class="btn btn-secondary"><i
                                class="fas fa-arrow-left"></i> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
