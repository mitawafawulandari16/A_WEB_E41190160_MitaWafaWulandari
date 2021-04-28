<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalam_kerja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jabatan');
            $table->year('tahun_masuk');
            $table->year('tahun_keluar');
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
        Schema::dropIfExists('pengalam_kerja');
    }
}
