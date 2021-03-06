<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCreateProductRequest;
use App\Http\Requests\UpdateProducts;
use App\Models\Produtos;
use App\UploadFotos;
use Exception;

class ProductController extends Controller
{
    protected $request;
    private $repository;
    private $fotos;
    
    public function __construct(Request $request, Produtos $product, UploadFotos $fotos)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->repository = $product;
        $this->fotos = $fotos;
        //dd($product);
        
    }

    //-------------------------------------------------

    public function cadastroDeProduto( StoreCreateProductRequest $request) {
       
        try {
            
            $data = $request->all();
            $foto_principal = $request->allFiles()['img'][0];
            $product = $this->repository->create([
                'produto' => $data['produto'], 
                'codico_produto' => $data['codico_produto'], 
                'descricao' => $data['descricao'] , 
                'preco_antigo' => $data['preco_antigo'], 
                'promocao' => $data['promocao'] , 
                'detalhes' => $data['detalhes'] , 
                'categoria' => $data['categoria'] ,
                'tamanho' => $data['tamanho'] ,
                'estoque' => $data['estoque'],
                'foto_principal' =>  $foto_principal->store('caminho/' . $request->codico_produto)
            ]);
                for($i = 0; $i < count($request->allFiles()['img']); $i++) {
                    $file = $request->allFiles()['img'][$i];
                    $productImage = new UploadFotos();
                    $productImage->codico_produto = $request->codico_produto;
                    $productImage->path = $file->store('caminho/' . $productImage->codico_produto);
                    $productImage->save();
                };
                if($productImage->save()) {
                    return redirect()->route('admin.adcProduto')
                    ->with('sucess', 'Cadastro feito com suscesso');
                };
        }catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->route('admin.adcProduto')
            ->with('error', 'Cadastro falhou');
        }
                
    }
    



    public function alterarProduto() {
        $products = $this->repository->all();
        $productImages = $this->fotos->all();
        return view('admin.alterarProduto', [
            'products' => $products,
            'productImages' => $productImages,
        ]);
    }
    

    public function deleteProduto($id) {
        $product = $this->repository->where('codico_produto', $id)->first();
        $fotos = $this->fotos->where('codico_produto', $id); 
        if(!$product) {
            return redirect()->back();
        }
        $fotos->delete();
        $product->delete();
        return redirect()->route('admin.altProduto');
    }


    public function editarProduto($id) {
        $products = $this->repository->where('codico_produto', $id)->first();  
        $productImages = $this->fotos->where('codico_produto', $id);
        if(!$products) {
            return redirect()->back();
        }
        return view('admin.editarProduto', [
            'products' => $products,
            'productImages' => $productImages,
        ]);
    }

    public function updateProduto(UpdateProducts $request, $id) {
        $products = $this->repository->where('codico_produto', $id)->first();  
        $productImages = $this->fotos->where('codico_produto', $id);
        $products->update($request->all());
        return redirect()->back();
    }
        
        
}
