@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-info-circle"></i> Detail Anomali Proteksi
                </div>
                <div class="card-body">
                    <ul class="list-group">

                        <li class="list-group-item">
                            <i class="fas fa-building"></i> <strong>Gardu Induk:</strong>
                            {{ $anomaliProteksi->gardu_induk }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-cogs"></i> <strong>Bay:</strong> {{ $anomaliProteksi->bay }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-tools"></i> <strong>Peralatan:</strong> {{ $anomaliProteksi->peralatan }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-sitemap"></i> <strong>Phasa:</strong> {{ $anomaliProteksi->phasa }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-exclamation-triangle"></i> <strong>Permasalahan:</strong>
                            {{ $anomaliProteksi->permasalahan }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-tags"></i> <strong>Kategori Anomali:</strong>
                            {{ $anomaliProteksi->kategori_anomali }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-calendar-day"></i> <strong>Tanggal Temuan:</strong>
                            {{ $anomaliProteksi->tanggal_temuan }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-calendar-check"></i> <strong>Tanggal Rencana:</strong>
                            {{ $anomaliProteksi->tanggal_rencana ?? '-' }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-calendar-alt"></i> <strong>Tanggal Realisasi:</strong>
                            {{ $anomaliProteksi->tanggal_realisasi ?? '-' }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-exclamation-circle"></i> <strong>Anomaly Mayor/Minor:</strong>
                            {{ $anomaliProteksi->anomaly_mayor_minor }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-info-circle"></i> <strong>Status:</strong> {{ $anomaliProteksi->status }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-file-alt"></i> <strong>Data Pendukung:</strong>
                            {{ $anomaliProteksi->data_pendukung }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-wrench"></i> <strong>Usulan Perbaikan:</strong>
                            {{ $anomaliProteksi->usulan_perbaikan }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-user"></i> <strong>Pelaksana:</strong> {{ $anomaliProteksi->pelaksana }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-dollar-sign"></i> <strong>Perkiraan Kebutuhan Anggaran:</strong>
                            {{ number_format($anomaliProteksi->perkiraan_kebutuhan_anggaran, 0) }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-money-bill-wave"></i> <strong>RAB:</strong>
                            {{ $anomali->rab ?? '-' }}
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-comment-dots"></i> <strong>Keterangan:</strong>
                            {{ $anomaliProteksi->keterangan }}
                        </li>

                    </ul>
                    <div class="text-right">
                        <a href="{{ route('anomaliproteksi.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
