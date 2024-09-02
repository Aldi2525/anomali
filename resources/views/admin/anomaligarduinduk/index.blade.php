@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list-alt"></i> Daftar Anomali Gardu Induk
                    <a href="{{ route('anomaligarduinduk.create') }}" class="btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Tambah Anomali
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelAnomaliGarduInduk"
                            class="table table-striped table-bordered table-hover table-condensed">
                            <thead class="thead-dark">
                                <tr>
                                    <th><i class="fas fa-warehouse"></i> Gardu Induk</th>
                                    <th><i class="fas fa-layer-group"></i> Bay</th>
                                    <th><i class="fas fa-tools"></i> Peralatan</th>
                                    <th><i class="fas fa-bolt"></i> Phasa</th>
                                    <th><i class="fas fa-exclamation-circle"></i> Permasalahan</th>
                                    <th><i class="fas fa-tags"></i> Kategori Anomali</th>
                                    <th><i class="fas fa-calendar-alt"></i> Tanggal Temuan</th>
                                    <th><i class="fas fa-calendar-check"></i> Tanggal Rencana</th>
                                    <th><i class="fas fa-calendar-day"></i> Tanggal Realisasi</th>
                                    <th><i class="fas fa-balance-scale"></i> Anomaly Mayor/Minor</th>
                                    <th><i class="fas fa-info-circle"></i> Status</th>
                                    <th><i class="fas fa-file-alt"></i> Data Pendukung Anomali</th>
                                    <th><i class="fas fa-lightbulb"></i> Usulan Perbaikan</th>
                                    <th><i class="fas fa-user-cog"></i> Pelaksana</th>
                                    <th><i class="fas fa-coins"></i> Perkiraan Kebutuhan Anggaran</th>
                                    <th><i class="fas fa-receipt"></i> RAB</th>
                                    <th><i class="fas fa-comment-alt"></i> Keterangan</th>
                                    <th><i class="fas fa-cogs"></i> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anomaliGarduInduks as $anomali)
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
                                            <a href="{{ route('anomaligarduinduk.show', $anomali->id) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="{{ route('anomaligarduinduk.edit', $anomali->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('anomaligarduinduk.destroy', $anomali->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
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
            $('#tabelAnomaliGarduInduk').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endpush
