@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-yellow text-white">
                    <i class="fas fa-info-circle"></i>
                    Edit Anomali Gardu Induk
                </div>
                <div class="card-body">
                    <form action="{{ route('anomaligarduinduk.update', $anomaliGarduInduk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gardu_induk">Gardu Induk</label>
                                    <input type="text" class="form-control" id="gardu_induk" name="gardu_induk"
                                        value="{{ $anomaliGarduInduk->gardu_induk }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bay">Bay</label>
                                    <input type="text" class="form-control" id="bay" name="bay"
                                        value="{{ $anomaliGarduInduk->bay }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="peralatan">Peralatan</label>
                                    <input type="text" class="form-control" id="peralatan" name="peralatan"
                                        value="{{ $anomaliGarduInduk->peralatan }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phasa">Phasa</label>
                                    <input type="text" class="form-control" id="phasa" name="phasa"
                                        value="{{ $anomaliGarduInduk->phasa }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="permasalahan">Permasalahan</label>
                                    <textarea class="form-control" id="permasalahan" name="permasalahan" required>{{ $anomaliGarduInduk->permasalahan }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kategori_anomali">Kategori Anomali</label>
                                    <input type="text" class="form-control" id="kategori_anomali" name="kategori_anomali"
                                        value="{{ $anomaliGarduInduk->kategori_anomali }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_temuan">Tanggal Temuan</label>
                                    <input type="date" class="form-control" id="tanggal_temuan" name="tanggal_temuan"
                                        value="{{ $anomaliGarduInduk->tanggal_temuan }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_rencana">Tanggal Rencana</label>
                                    <input type="date" class="form-control" id="tanggal_rencana" name="tanggal_rencana"
                                        value="{{ $anomaliGarduInduk->tanggal_rencana ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_realisasi">Tanggal Realisasi</label>
                                    <input type="date" class="form-control" id="tanggal_realisasi"
                                        name="tanggal_realisasi" value="{{ $anomaliGarduInduk->tanggal_realisasi ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="anomaly_mayor_minor">Anomaly Mayor/Minor</label>
                                    <input type="text" class="form-control" id="anomaly_mayor_minor"
                                        name="anomaly_mayor_minor" value="{{ $anomaliGarduInduk->anomaly_mayor_minor }}"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="{{ $anomaliGarduInduk->status }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="data_pendukung">Data Pendukung</label>
                                    <textarea class="form-control" id="data_pendukung" name="data_pendukung">{{ $anomaliGarduInduk->data_pendukung }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usulan_perbaikan">Usulan Perbaikan</label>
                                    <textarea class="form-control" id="usulan_perbaikan" name="usulan_perbaikan">{{ $anomaliGarduInduk->usulan_perbaikan }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pelaksana">Pelaksana</label>
                                    <input type="text" class="form-control" id="pelaksana" name="pelaksana"
                                        value="{{ $anomaliGarduInduk->pelaksana }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="perkiraan_kebutuhan_anggaran">Perkiraan Kebutuhan Anggaran</label>
                                    <input type="number" class="form-control" id="perkiraan_kebutuhan_anggaran"
                                        name="perkiraan_kebutuhan_anggaran"
                                        value="{{ $anomaliGarduInduk->perkiraan_kebutuhan_anggaran }}" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rab">RAB</label>
                                    <input type="text" class="form-control" id="rab" name="rab"
                                        value="{{ $anomaliGarduInduk->rab }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan">{{ $anomaliGarduInduk->keterangan }}</textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('anomaligarduinduk.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
