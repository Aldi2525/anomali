@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-info-circle"></i>
                    Edit Anomali Gardu Induk
                </div>
                <div class="card-body">
                    <form action="{{ route('anomaliproteksi.update', $anomaliProteksi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="gardu_induk"><i class="fas fa-bolt"></i> Gardu Induk</label>
                            <input type="text" class="form-control" id="gardu_induk" name="gardu_induk"
                                value="{{ $anomaliProteksi->gardu_induk }}" required>
                        </div>

                        <div class="form-group">
                            <label for="bay"><i class="fas fa-box"></i> Bay</label>
                            <input type="text" class="form-control" id="bay" name="bay"
                                value="{{ $anomaliProteksi->bay }}" required>
                        </div>

                        <div class="form-group">
                            <label for="peralatan"><i class="fas fa-tools"></i> Peralatan</label>
                            <input type="text" class="form-control" id="peralatan" name="peralatan"
                                value="{{ $anomaliProteksi->peralatan }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phasa"><i class="fas fa-wave-square"></i> Phasa</label>
                            <input type="text" class="form-control" id="phasa" name="phasa"
                                value="{{ $anomaliProteksi->phasa }}" required>
                        </div>

                        <div class="form-group">
                            <label for="permasalahan"><i class="fas fa-exclamation-triangle"></i> Permasalahan</label>
                            <textarea class="form-control" id="permasalahan" name="permasalahan" required>{{ $anomaliProteksi->permasalahan }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="kategori_anomali"><i class="fas fa-tags"></i> Kategori Anomali</label>
                            <input type="text" class="form-control" id="kategori_anomali" name="kategori_anomali"
                                value="{{ $anomaliProteksi->kategori_anomali }}" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_temuan"><i class="fas fa-calendar-alt"></i> Tanggal Temuan</label>
                            <input type="date" class="form-control" id="tanggal_temuan" name="tanggal_temuan"
                                value="{{ $anomaliProteksi->tanggal_temuan }}" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_rencana"><i class="fas fa-calendar-alt"></i> Tanggal Rencana</label>
                            <input type="date" class="form-control" id="tanggal_rencana" name="tanggal_rencana"
                                value="{{ $anomaliProteksi->tanggal_rencana ?? '-' }}">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_realisasi"><i class="fas fa-calendar-alt"></i> Tanggal Realisasi</label>
                            <input type="date" class="form-control" id="tanggal_realisasi" name="tanggal_realisasi"
                                value="{{ $anomaliProteksi->tanggal_realisasi ?? '-' }}">
                        </div>

                        <div class="form-group">
                            <label for="anomaly_mayor_minor"><i class="fas fa-exclamation-circle"></i> Anomaly
                                Mayor/Minor</label>
                            <input type="text" class="form-control" id="anomaly_mayor_minor" name="anomaly_mayor_minor"
                                value="{{ $anomaliProteksi->anomaly_mayor_minor }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status"><i class="fas fa-info-circle"></i> Status</label>
                            <input type="text" class="form-control" id="status" name="status"
                                value="{{ $anomaliProteksi->status }}">
                        </div>

                        <div class="form-group">
                            <label for="data_pendukung"><i class="fas fa-folder"></i> Data Pendukung</label>
                            <textarea class="form-control" id="data_pendukung" name="data_pendukung">{{ $anomaliProteksi->data_pendukung }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="usulan_perbaikan"><i class="fas fa-lightbulb"></i> Usulan Perbaikan</label>
                            <textarea class="form-control" id="usulan_perbaikan" name="usulan_perbaikan">{{ $anomaliProteksi->usulan_perbaikan }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="pelaksana"><i class="fas fa-user-cog"></i> Pelaksana</label>
                            <input type="text" class="form-control" id="pelaksana" name="pelaksana"
                                value="{{ $anomaliProteksi->pelaksana }}" required>
                        </div>

                        <div class="form-group">
                            <label for="perkiraan_kebutuhan_anggaran"><i class="fas fa-money-bill-wave"></i> Perkiraan
                                Kebutuhan Anggaran</label>
                            <input type="number" class="form-control" id="perkiraan_kebutuhan_anggaran"
                                name="perkiraan_kebutuhan_anggaran"
                                value="{{ $anomaliProteksi->perkiraan_kebutuhan_anggaran }}" step="0.01">
                        </div>

                        <div class="form-group">
                            <label for="rab"><i class="fas fa-file-invoice-dollar"></i> RAB</label>
                            <input type="text" class="form-control" id="rab" name="rab"
                                value="{{ $anomaliProteksi->rab }}">
                        </div>

                        <div class="form-group">
                            <label for="keterangan"><i class="fas fa-comment-alt"></i> Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan">{{ $anomaliProteksi->keterangan }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('anomaliproteksi.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
