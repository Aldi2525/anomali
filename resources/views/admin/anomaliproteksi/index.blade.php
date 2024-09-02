@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Anomali Proteksi
                    <a href="{{ route('anomaliproteksi.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                        Anomali</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelAnomaliProteksi"
                            class="table table-striped table-bordered table-hover table-condensed">
                            <thead class="thead-dark">
                                <tr>
                                    <th><i class="fas fa-bolt"></i> Gardu Induk</th>
                                    <th><i class="fas fa-layer-group"></i> Bay</th>
                                    <th><i class="fas fa-tools"></i> Peralatan</th>
                                    <th><i class="fas fa-plug"></i> Phasa</th>
                                    <th><i class="fas fa-exclamation-circle"></i> Permasalahan</th>
                                    <th><i class="fas fa-tags"></i> Kategori Anomali</th>
                                    <th><i class="fas fa-calendar-alt"></i> Tanggal Temuan</th>
                                    <th><i class="fas fa-calendar-alt"></i> Tanggal Rencana</th>
                                    <th><i class="fas fa-calendar-alt"></i> Tanggal Realisasi</th>
                                    <th><i class="fas fa-exclamation-triangle"></i> Anomaly Mayor/Minor</th>
                                    <th><i class="fas fa-check"></i> Status</th>
                                    <th><i class="fas fa-database"></i> Data Pendukung</th>
                                    <th><i class="fas fa-lightbulb"></i> Usulan Perbaikan</th>
                                    <th><i class="fas fa-user-tie"></i> Pelaksana</th>
                                    <th><i class="fas fa-money-bill-wave"></i> Perkiraan Kebutuhan Anggaran</th>
                                    <th><i class="fas fa-file-invoice"></i> RAB</th>
                                    <th><i class="fas fa-comment-dots"></i> Keterangan</th>
                                    <th><i class="fas fa-cogs"></i> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anomaliProteksis as $anomali)
                                    <tr>
                                        <td>{{ $anomali->gardu_induk }}</td>
                                        <td>{{ $anomali->bay }}</td>
                                        <td>{{ $anomali->peralatan }}</td>
                                        <td>{{ $anomali->phasa }}</td>
                                        <td>{{ $anomali->permasalahan }}</td>
                                        <td>{{ $anomali->kategori_anomali }}</td>
                                        <td>{{ $anomali->tanggal_temuan }}</td>
                                        <td>{{ $anomali->tanggal_rencana }}</td>
                                        <td>{{ $anomali->tanggal_realisasi }}</td>
                                        <td>{{ $anomali->anomaly_mayor_minor }}</td>
                                        <td>{{ $anomali->status }}</td>
                                        <td>{{ $anomali->data_pendukung }}</td>
                                        <td>{{ $anomali->usulan_perbaikan }}</td>
                                        <td>{{ $anomali->pelaksana }}</td>
                                        <td>{{ number_format($anomali->perkiraan_kebutuhan_anggaran, 2, ',', '.') }}</td>
                                        <td>{{ $anomali->rab }}</td>
                                        <td>{{ $anomali->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('anomaliproteksi.show', $anomali->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('anomaliproteksi.edit', $anomali->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('anomaliproteksi.destroy', $anomali->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tabelAnomaliProteksi').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endpush
