<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenyediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyedia', function (Blueprint $table) {
          $table->increments('id');
          $table->string('image_path')->nullable();
          $table->string('fullname');
          $table->string('shortname');
          $table->string('slug');
          $table->text('desc');
          $table->text('contact');

          $table->integer('tipe_id')->nullable()->unsigned();
          $table->foreign('tipe_id')->references('id')->on('tipe');
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

        Schema::dropIfExists('penyedia');

    }
}
