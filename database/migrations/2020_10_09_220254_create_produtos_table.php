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
            $table->string('produto');
            $table->text('descricao');
            $table->double('preco_antigo', 8,2);
            $table->double('promocao', 8,2);
            $table->string('detalhes')->nullable();
            $table->string('categoria');
            $table->string('tamanho');
            $table->integer('estoque');
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
