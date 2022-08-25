<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('jenis');
            $table->string('ukuran');
            $table->integer('listrik');
            $table->integer('jumlah');
            $table->string('alamat');
            $table->text('deskripsi');
            $table->json('fasilitas');
            $table->json('peraturan');
            $table->boolean('tipe');
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
        Schema::dropIfExists('kos');
    }
}
