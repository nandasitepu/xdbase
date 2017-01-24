<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar');
            $table->string('nama');
            $table->string('slug');
            $table->text('detail');
            $table->text('syarat');
            $table->text('waktu');
            $table->text('biaya');
            $table->text('kontak');
            $table->text('info');
            // Relational Model
            $table->integer('penyedia_id');
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
        Schema::dropIfExists('layanan');
    }
}
