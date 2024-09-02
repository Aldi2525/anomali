@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Tambah Laporan
                </div>
                <div class="card-body">
                    <form action="{{ route('cetaklaporan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judul_laporan">Judul Laporan</label>
                            <input type="text" class="form-control" id="judul_laporan" name="judul_laporan" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_laporan">Deskripsi Laporan</label>
                            <textarea class="form-control" id="deskripsi_laporan" name="deskripsi_laporan" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_cetak">Tanggal Cetak</label>
                            <input type="date" class="form-control" id="tanggal_cetak" name="tanggal_cetak" required>
                        </div>

                        <!-- Dropdown to choose anomaly type -->
                        <div class="form-group">
                            <label for="anomali_type">Tipe Anomali</label>
                            <select class="form-control" id="anomali_type" name="anomali_type">
                                <option value="">---</option>
                                <option value="gardu_induk">Anomali Gardu Induk</option>
                                <option value="proteksi">Anomali Proteksi</option>
                                <option value="jaringan">Anomali Jaringan</option>
                            </select>
                        </div>

                        <!-- Dropdown for Gardu Induk -->
                        <div class="form-group" id="anomali_gardu_induk_section" style="display:none;">
                            <label for="anomali_gardu_induk_id">Anomali Gardu Induk</label>
                            <select class="form-control" id="anomali_gardu_induk_id" name="anomali_gardu_induk_id">
                                <option value="">Pilih Anomali Gardu Induk</option>
                                @foreach ($anomaliGarduInduks as $garduInduk)
                                    <option value="{{ $garduInduk->id }}">{{ $garduInduk->gardu_induk }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Dropdown for Proteksi -->
                        <div class="form-group" id="anomali_proteksi_section" style="display:none;">
                            <label for="anomali_proteksi_id">Anomali Proteksi</label>
                            <select class="form-control" id="anomali_proteksi_id" name="anomali_proteksi_id">
                                <option value="">Pilih Anomali Proteksi</option>
                                @foreach ($anomaliProteksis as $proteksi)
                                    <option value="{{ $proteksi->id }}">{{ $proteksi->proteksi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Dropdown for Jaringan -->
                        <div class="form-group" id="anomali_jaringan_section" style="display:none;">
                            <label for="anomali_jaringan_id">Anomali Jaringan</label>
                            <select class="form-control" id="anomali_jaringan_id" name="anomali_jaringan_id">
                                <option value="">Pilih Anomali Jaringan</option>
                                @foreach ($anomaliJaringans as $jaringan)
                                    <option value="{{ $jaringan->id }}">{{ $jaringan->jaringan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('cetaklaporan.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#anomali_type').change(function() {
                var selectedType = $(this).val();

                // Hide all sections
                $('#anomali_gardu_induk_section').hide();
                $('#anomali_proteksi_section').hide();
                $('#anomali_jaringan_section').hide();

                // Show the corresponding section based on selected anomaly type
                if (selectedType === 'gardu_induk') {
                    $('#anomali_gardu_induk_section').show();
                } else if (selectedType === 'proteksi') {
                    $('#anomali_proteksi_section').show();
                } else if (selectedType === 'jaringan') {
                    $('#anomali_jaringan_section').show();
                }
            });
        });
    </script>
@endpush
