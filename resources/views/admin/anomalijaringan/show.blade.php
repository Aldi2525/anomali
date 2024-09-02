@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-green text-white">
                    <i class="fas fa-exclamation-triangle"></i> Detail Anomali Jaringan
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th><i class="fas fa-bolt"></i> Penghantar</th>
                                <td>{{ $anomaliJaringan->penghantar }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-tower"></i> Span/Tower</th>
                                <td>{{ $anomaliJaringan->spantower }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-layer-group"></i> Phasa</th>
                                <td>{{ $anomaliJaringan->phasa }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-tools"></i> Peralatan</th>
                                <td>{{ $anomaliJaringan->peralatan }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-exclamation-circle"></i> Permasalahan</th>
                                <td>{{ $anomaliJaringan->permasalahan }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-tags"></i> Kategori Anomali</th>
                                <td>{{ $anomaliJaringan->kategori_anomali }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-calendar-alt"></i> Tanggal Temuan</th>
                                <td>{{ $anomaliJaringan->tanggal_temuan }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-calendar-check"></i> Tanggal Rencana</th>
                                <td>{{ $anomaliJaringan->tanggal_rencana ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-calendar-day"></i> Tanggal Realisasi</th>
                                <td>{{ $anomaliJaringan->tanggal_realisasi ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-balance-scale"></i> Anomaly Mayor/Minor</th>
                                <td>{{ $anomaliJaringan->anomaly_mayor_minor }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-info-circle"></i> Status</th>
                                <td>{{ $anomaliJaringan->status }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-file-alt"></i> Data Pendukung</th>
                                <td>{{ $anomaliJaringan->data_pendukung }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-lightbulb"></i> Usulan Perbaikan</th>
                                <td>{{ $anomaliJaringan->usulan_perbaikan }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-user-cog"></i> Pelaksana</th>
                                <td>{{ $anomaliJaringan->pelaksana }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-coins"></i> Perkiraan Kebutuhan Anggaran</th>
                                <td>{{ number_format($anomaliJaringan->perkiraan_kebutuhan_anggaran, 2) }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-receipt"></i> RAB</th>
                                <td>{{ $anomaliJaringan->rab }}</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-comment-alt"></i> Keterangan</th>
                                <td>{{ $anomaliJaringan->keterangan }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a href="{{ route('anomalijaringan.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
