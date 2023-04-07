<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat');
            $table->bigInteger('no_telp');
            $table->bigInteger('no_fax');
            $table->year('tahun');
            $table->bigInteger('kelurahan_id');
            $table->bigInteger('kecamatan_id');
            $table->bigInteger('status_id');
            $table->bigInteger('jenis_id');
            $table->bigInteger('layanan_id');
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
        Schema::dropIfExists('perusahaans');
    }
}
