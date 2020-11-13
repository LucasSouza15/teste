@extends('admin.layouts.app')
@section('conteudoAdmin')

  <div class="container">
      <h1>Cadastrar novo vendedor </h1>
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
        <form class="form" action="{{route('admin.AdicionarUsuario')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <!-- Imagem 1 -->
            <div class="col-12 d-flex align-items-center ">
                <img id="img" style="width:100px;"/>
              <label for="selecao-arquivo" style="background-color: #3498db;border-radius: 5px;color: #fff;cursor: pointer;margin: 10px;padding: 6px 20px">Adicionar fotos </label>
              <input type="file" id="selecao-arquivo" style="display:none" name="image" >

              <!-- Script --> 
              <script>
                $(function() {
                  $('#selecao-arquivo').change(function () {
                    const file = ($(this)[0].files[0])
                    const fileReader = new FileReader()
                    fileReader.onloadend = function() {
                      $('#img').attr('src', fileReader.result)
                    }
                    fileReader.readAsDataURL(file)
                })})
              </script>

              @error('img')
                <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
              @enderror
              <span>(Adicione uma foto)</span>
            </div>
            

          <div class=" form-group col-8 d-flex align-items-center mb-2">
            <label for="" class="mr-1">Vendedor</label>
            <input type="text" class="form-control" name="name">
            @error('nome')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
 
          <div class=" form-group col-4 d-flex align-items-center mb-2">
            <label for="" class="mr-1">Cargo</label>
            <select class="form-control" name="is_admin">
              <option value="1">Admin</option>
              <option value="2">Vendedor</option>
            </select>
            @error('cargo')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group col-8 d-flex align-items-center mb-2">
            <label for="" class="mr-1">Email</label>
            <input type="text" class="form-control" name="email">
            @error('email')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>
          

         
          <div class="form-group col-5 d-flex align-items-center mb-2">
            <label for="" class="mr-1">Senha </label>
            <input type="password" class="form-control" name="password">
            @error('senha')
              <span class="text-danger" style="font-size:10px;">{{ $message }}</span>
            @enderror
          </div>


        </div>
        <button type="submit" class="btn btn-outline-info my-5">Inserir Usuario</button>
      </form>
  </div>

    
    </div>
  <!-- /.container-fluid -->
  
</div>
<!-- End of Main Content -->  
@endsection
