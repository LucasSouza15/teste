<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_fotos', function (Blueprint $table) {
            $table->id();
            $table->integer('codico_produto')->nullable();
            $table->foreign('codico_produto')->references('codico_produto')->on('produtos');
            $table->string('path');
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
        Schema::dropIfExists('upload_fotos');
    }
}
