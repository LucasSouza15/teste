<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produtos;
use App\UploadFotos;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //-------------------------------------------------

    public function cadastroDeProduto(Request $request) {
        $product = new Produtos();
        $product->produto = $request->produto;
        $product->codico_produto = $request->codico;
        $product->save();
        
        for($i = 0; $i < count($request->allFiles()['img']); $i++) {
            $file = $request->allFiles()['img'][$i]; 
            $productImage = new UploadFotos();
            $productImage->codico_produto = $product->codico_produto;
            $productImage->path = $file->store('caminho');
            $productImage->save();
            unset($productImage);
        }

    }
}
