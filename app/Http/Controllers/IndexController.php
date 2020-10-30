<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

//use Iluminate\Support\Facades\Http;

class IndexController extends Controller
{
    private $estoques;
    private $produtos;
    public function __construct()
    {
        $this->produtos = new Produtos();
    }
    public function index() {
        
        return view('home');
    }
    public function contato() {
        return view('blank');
    }
    public function checkout($id) {
        
        $products = Produtos::where('codico_produto', $id)->first();
        
        //dd($estoques);
        foreach ($estoques as $estoque) {
            $tamanhoPedido =  $_POST['tamanho'];
            $qtdPedida = $_POST['qtd'];
            $TamanhoEstoque = $products->tamanho; 
            $QtdEstoque = $products->estoque;
            if($tamanhoPedido == $TamanhoEstoque && $qtdPedida <= $QtdEstoque) {
                return view('checkout', [
                'products' => $products,
            ]);
            } else {
                return redirect()->action('IndexController@product', $products->codico_produto);
                //{{route('site.product',$products->codico_produto)}};
            }
        };
     
    }
    public function StoreEnxovais() {
        $products = Produtos::paginate();
        return view('StoreEnxovais', [
            'products' => $products,
        ]);
    }
    public function StoreCosmeticos() {
        $products = Produtos::paginate();
        return view('StoreCosmeticos', [
            'products' => $products,
        ]);
    }
    public function StoreRoupas() {
        $products = Produtos::paginate(9);
        return view('StoreRoupas', [
            'products' => $products,
        ]);
    }
    public function product($id) {
        $products = Produtos::where('codico_produto', $id)->first();
        $productRelacionados = Produtos::paginate(5)->where('categoria', $products->categoria)->whereNotIn('codico_produto', $id);
        //dd($productRelacionados);
        return view('product', [
            'products' => $products,
            'productRelacionados' => $productRelacionados
        ]);
    } 
}


		
	