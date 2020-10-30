<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
  protected $fillable = ['produto', 'codico_produto', 'descricao', 
                        'preco_antigo', 'promocao', 'detalhes', 
                        'categoria','tamanho','estoque'];
}
