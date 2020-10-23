<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;

use App\Models\Produtos;
use App\UploadFotos;
use Exception;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //-------------------------------------------------

    public function cadastroDeProduto( Request $request) {

        $validData = $request->validate([
            'img[]' => 'image',
            'produto' => 'required|min:2|max:255',
            'codico_produto' => 'required|unique:produtos',
            'descricao' => 'required|min:2|max:10000',
            'preco_antigo' => "nullable|regex:/^\d+(\.\d{1,2})?$/",
            'promocao' => "required|regex:/^\d+(\.\d{1,2})?$/",
            'categoria' => 'required',
            'tamanho' => 'required',
            'estoque' => 'required',
            'detalhes' => 'nullable|min:2|max:10000',
        ]);
            try {
                $product = new Produtos();
                $product->produto = $request->produto;
                $product->codico_produto = $request->codico_produto;
                $product->descricao = $request->descricao;
                $product->preco_antigo = $request->preco_antigo;
                $product->promocao = $request->promocao;
                $product->detalhes = $request->detalhes;
                $product->categoria = $request->categoria;
                $product->save();
                if($product->save()) {
                    for($i = 0; $i < count($request->allFiles()['img']); $i++) {
                        $file = $request->allFiles()['img'][$i]; 
                        $productImage = new UploadFotos();
                        $productImage->codico_produto = $product->codico_produto;
                        $productImage->path = $file->store('caminho/' . $productImage->codico_produto);
                        $productImage->save();
                    }
                    if($productImage->save()) {
                        return redirect()->route('admin.adcProduto')
                        ->with('sucess', 'Cadastro feito com suscesso');
                    }
                }
            }catch (Exception $e) {
                     return redirect()->route('admin.adcProduto')
                    ->with('error', 'Cadastro falhou');
                }
                
            }
  
        
}
