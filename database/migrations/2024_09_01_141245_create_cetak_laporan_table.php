<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCetakLaporanTable extends Migration
{
    public function up()
    {
        Schema::create('cetak_laporan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->text('deskripsi_laporan');
            $table->date('tanggal_cetak');
            $table->foreignId('anomali_gardu_induk_id')->nullable()->constrained('anomali_gardu_induk')->onDelete('set null');
            $table->foreignId('anomali_proteksi_id')->nullable()->constrained('anomali_proteksi')->onDelete('set null');
            $table->foreignId('anomali_jaringan_id')->nullable()->constrained('anomali_jaringan')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cetak_laporan');
    }
}