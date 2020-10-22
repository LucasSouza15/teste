@extends('admin.layouts.app')
@section('conteudoAdmin')

  <div class="container">
      <h1>Novo Produto</h1>
  </div>

  <div class="border rounded p-4">
        <form class="form" action="{{route('admin.adicionaProduto')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <!-- Imagem 1 -->
            <div class="col-12 d-flex align-items-center ">
              <label for="selecao-arquivo1" style="background-color: #3498db;border-radius: 5px;color: #fff;cursor: pointer;margin: 10px;padding: 6px 20px">Adicionar fotos </label>
              <input type="file" id="selecao-arquivo1" style="display:none" name="img[]" multiple>
            </div>

          <div class="col-6 d-flex align-items-center">
            <label for="">Nome do produto</label>
            <input type="text" class="form-control" name="produto">
          </div>

          <div class="col-2 d-flex align-items-center my-2">
            <label for="">Codico</label>
            <input type="text" class="form-control" name="codico">
          </div>

          <div class="col-2 d-flex align-items-center">
            <label for="">Preço antigo </label>
            <input type="text" class="form-control" name="preco_antigo">
          </div>

         
          <div class="col-2 d-flex align-items-center">
            <label for="">Preço atual </label>
            <input type="text" class="form-control" name="preco _atual">
          </div>
          
          <div class="col-5 d-flex align-items-center my-2">
            <label for="">Selecione a categoria </label>
            <select name="categoria" id="" class="form-control">
              <option value="roupas">Roupas</option>
              <option value="enxovais">Enxovais</option>
              <option value="perfumes">Perfumes</option>
            </select>
          </div>

          <div class="col-2 d-flex align-items-center my-2">
            <label for="">Tamanho</label>
            <select name="tamanho" id="" class="form-control">
              <option value="P">P</option>
              <option value="M">M</option>
              <option value="G">G</option>
            </select>
          </div>
          <div class="col-2 d-flex align-items-center my-2">
            <label for="">Estoque</label>
            <input type="text" class="form-control" name="estoque">
          </div>

          <div class="col-8 d-flex align-items-center my-2">
            <label for="">Descrição do produto </label>
            <textarea class="form-control" name="descricao" id="" cols="100" rows="3"></textarea>
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
