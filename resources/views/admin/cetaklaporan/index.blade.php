@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Laporan
                    <a href="{{ route('cetaklaporan.create') }}" class="btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Tambah Laporan
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelCetakLaporan" class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Judul Laporan</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Cetak</th>
                                    <th>Anomali Terkait</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cetakLaporans as $laporan)
                                    <tr>
                                        <td>{{ $laporan->judul_laporan }}</td>
                                        <td>{{ $laporan->deskripsi_laporan }}</td>
                                        <td>{{ $laporan->tanggal_cetak }}</td>
                                        <td>
                                            @if ($laporan->anomali_gardu_induk_id)
                                                Gardu Induk: {{ $laporan->anomaliGarduInduk->gardu_induk ?? '-' }}
                                            @elseif($laporan->anomali_proteksi_id)
                                                Proteksi: {{ $laporan->anomaliProteksi->proteksi ?? '-' }}
                                            @elseif($laporan->anomali_jaringan_id)
                                                Jaringan: {{ $laporan->anomaliJaringan->jaringan ?? '-' }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Export to Excel -->
                                            <a href="{{ route('cetaklaporan.export', ['format' => 'excel', 'id' => $laporan->id]) }}"
                                                class="btn btn-success btn-sm">Excel</a>
                                            <!-- Export to PDF -->
                                            <a href="{{ route('cetaklaporan.export', ['format' => 'pdf', 'id' => $laporan->id]) }}"
                                                class="btn btn-danger btn-sm">PDF</a>
                                            <!-- Export to DOC -->
                                            <a href="{{ route('cetaklaporan.export', ['format' => 'doc', 'id' => $laporan->id]) }}"
                                                class="btn btn-primary btn-sm">DOC</a>
                                            <!-- Export to CSV -->
                                            <a href="{{ route('cetaklaporan.export', ['format' => 'csv', 'id' => $laporan->id]) }}"
                                                class="btn btn-info btn-sm">CSV</a>
                                            <form action="{{ route('cetaklaporan.destroy', $laporan->id) }}" method="POST"
                                                style="display:inline;">
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
            $('#tabelCetakLaporan').DataTable();
        });
    </script>
@endpush
