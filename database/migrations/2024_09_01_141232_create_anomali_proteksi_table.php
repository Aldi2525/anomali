<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnomaliProteksiTable extends Migration
{
    public function up()
    {
        Schema::create('anomali_proteksi', function (Blueprint $table) {
            $table->id();
            $table->string('gardu_induk');
            $table->string('bay');
            $table->string('peralatan');
            $table->string('phasa');
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
        Schema::dropIfExists('anomali_proteksi');
    }
}