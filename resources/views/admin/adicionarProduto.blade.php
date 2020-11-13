@extends('admin.layouts.app')
@section('conteudoAdmin')

  <div class="container">
      <h1>Novo Produto</h1>
  </div>
  @if(session(''))
    
  @elseif (session('sucess'))
    <div class="alert alert-success">
      <H1>{{ session('sucess') }}</H1>
    </div>
  @elseif(session('error'))
    <div class="alert alert-danger">
      <h1>{{session('error') }}</h1>
    </div>
  @endif
  
  <div class="border rounded p-4">
        <form class="form" action="{{route('admin.CadastroProduto')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <!-- Imagem 1 -->
            <div class="col-12 d-flex align-items-center ">
              <label for="selecao-arquivo1" style="background-color: #3498db;border-radius: 5px;color: #fff;cursor: pointer;margin: 10px;padding: 6px 20px">Adicionar fotos </label>
              <input type="file" id="selecao-arquivo1" style="display:none" name="img[]" multiple>
              @error('img[]')
                <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
              @enderror
              <span>(Limite 4 fotos)</span>
            </div>
            

          <div class="col-6 d-flex align-items-center">
            <label for="" class="mr-1">Nome do produto</label>
            <input type="text" class="form-control" name="produto">
            @error('produto')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          

          <div class="col-3 d-flex align-items-center my-2 offset-1">
            <label for="" class="mr-1">Codigo</label>
            <input type="text" class="form-control" name="codico_produto">
            @error('codico_produto')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
          

          <div class="col-3 d-flex align-items-center ">
            <label for="" class="mr-1">Preço antigo </label>
            <input type="text" class="form-control" name="preco_antigo">
            @error('preco_antigo')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
          

         
          <div class="col-3 d-flex align-items-center">
            <label for="" class="mr-1">Promoção </label>
            <input type="text" class="form-control" name="promocao">
            @error('promocao')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
          
          
          <div class="col-4 d-flex align-items-center my-2">
            <label for="" class="mr-1">Selecione a categoria </label>
            <select name="categoria" id="" class="custom-select">
              <option value="roupas">Roupas</option>
              <option value="enxovais">Enxovais</option>
              <option value="cosmeticos">Cosmeticos</option>
            </select>
            @error('categoria')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
          

          <div class="col-3 d-flex align-items-center my-2">
            <label for="" class="mr-1">Tamanho</label>
            <select name="tamanho" id="" class="form-control">
              <option value="P">P</option>
              <option value="M">M</option>
              <option value="G">G</option>
            </select>
            @error('tamanho')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
          

          <div class="col-3 d-flex align-items-center my-2">
            <label for="" class="mr-1">Estoque</label>
            <input type="text" class="form-control" name="estoque">
            @error('estoque')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
          

          <div class="col-8 d-flex align-items-center my-2">
            <label for="" class="mr-1" >Descrição do produto </label>
            <textarea class="form-control" name="descricao" id="" cols="100" rows="3"></textarea>
            @error('descricao')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
         

          <div class="col-8 d-flex align-items-center my-2">
            <label for="" class="mr-1">Detalhes do produto </label>
            <textarea class="form-control" name="detalhes" id="" cols="100" rows="3"></textarea>
          </div>

        </div>
        <button type="submit" class="btn btn-outline-info my-5">Cadastrar produto</button>
      </form>
  </div>

    
    </div>
  <!-- /.container-fluid -->
  
</div>
<!-- End of Main Content -->  
@endsection
