<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();	
            $table->integer('codico_produto')->unique();
            $table->string('produto')->nullable();
            $table->text('descricao')->nullable();
            $table->double('preco', 8,2)->nullable();
            $table->string('detalhes')->nullable();
            $table->string('cor')->nullable();
            $table->string('caminho_foto1')->nullable();
            $table->string('caminho_foto2');
            $table->string('caminho_foto3');
            $table->string('caminho_foto4');
            $table->string('categoria')->nullable();
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
        Schema::dropIfExists('produtos');
    }
}
