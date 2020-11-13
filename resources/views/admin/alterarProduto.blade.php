@extends('admin.layouts.app')
@section('conteudoAdmin')


        <div class="container">
          <h1 class="mb-5">Produtos cadastrados</h1>
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm ">
              <thead>
                  <tr  class="bg-primary text-white">
                    <th scope="col">Codigo</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Valor do produto</th>
                    <th scope="col">Imagem do Produto</th>
                    <th scope="col">Ação</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                    <tr>
                      <th scope="row">{{$product->codico_produto}}</th>
                      <th scope="row">{{$product->produto}}</th>
                      <th scope="row">{{$product->promocao}}</th>
                      <th scope="row">
                        @foreach ($productImages as $image)
                          @if ($product->codico_produto == $image->codico_produto)
                            <img src="{{asset('storage/' .  $image->path)}}" alt="" style="width: 50px;heigth:50px;">
                          @endif 
                        @endforeach
                      </th>
                      <th scope="row" class="row">
                        <button type="submit" class="btn">
                          <a href="{{route('admin.EditarProduto' , $product->codico_produto)}}">
                            <i class="far fa-edit mx-1 fa-lg text-success"></i>
                          </a>
                        </button>
                        <form action="{{route('admin.deletarProduto' , $product->codico_produto)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn">
                            <i class="fas fa-trash-alt fa-lg text-danger"></i>
                          </button>
                        </form>
                        
                      </th>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

    
      </div>
    <!-- /.container-fluid -->
    
    </div>
    <!-- End of Main Content -->  
@endsection
