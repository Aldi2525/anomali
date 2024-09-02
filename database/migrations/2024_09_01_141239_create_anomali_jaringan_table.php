<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnomaliJaringanTable extends Migration
{
    public function up()
    {
        Schema::create('anomali_jaringan', function (Blueprint $table) {
            $table->id();
            $table->string('penghantar');
            $table->string('spantower');
            $table->string('phasa');
            $table->string('peralatan');
            $table->text('permasalahan');
            $table->string('kategori_anomali');
            $table->date('tanggal_temuan');
            $table->date('tanggal_rencana')->nullable();
            $table->date('tanggal_realisasi')->nullable();
            $table->string('anomaly_mayor_minor');
            $table->string('status')->nullable();
            $table->text('data_pendukung')->nullable();
            $table->text('usulan_perbaikan')->nullable();
            $table->string('pelaksana');
            $table->integer('perkiraan_kebutuhan_anggaran')->nullable();
            $table->string('rab')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anomali_jaringan');
    }
}