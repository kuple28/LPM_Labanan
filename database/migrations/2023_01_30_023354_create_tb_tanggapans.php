<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTanggapans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tanggapans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengaduan');
            $table->foreignId('id_user');
            $table->timestamp('tgl_tanggapan');
            $table->text('tanggapan');
            $table->enum('status_tanggapan',['Ditinjau','proses', 'selesai'])->default('Ditinjau');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tanggapans');
        
    }
}
