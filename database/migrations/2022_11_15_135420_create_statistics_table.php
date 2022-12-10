<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('id_daerah');
            $table->date('tanggal');
            $table->text('lokasi');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('penyebab');
            $table->integer('meninggal');
            $table->integer('hilang');
            $table->integer('rumah_rusak');
            $table->integer('rumah_terendam');
            $table->integer('fasum_rusak');
            $table->text('maps');
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
        Schema::dropIfExists('statistics');
    }
};
