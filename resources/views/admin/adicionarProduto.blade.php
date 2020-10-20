@extends('admin.layouts.app')
@section('conteudoAdmin')

  <div class="container">
      <h1>Novo Produto</h1>
  </div>

  <div class="border rounded p-4">
      <form class="form" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="col-6 d-flex align-items-center">
            <label for="">Nome do produto : </label>
            <input type="text" class="form-control">
          </div>

          <div class="col-3 d-flex align-items-center">
            <label for="">Preço antigo: </label>
            <input type="text" class="form-control">
          </div>

         
          <div class="col-3 d-flex align-items-center">
            <label for="">Preço atual: </label>
            <input type="text" class="form-control">
          </div>

          <div class="col-4 d-flex align-items-center">
            <label for="">Codico do Produto</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-8 d-flex align-items-center">
            <label for="">Descrição do produto </label>
            <textarea class="form-control" name="" id="" cols="100" rows="3"></textarea>
          </div>
            <!-- Imagem 1 -->
          <div class="col-3 d-flex align-items-center">
              <label for="selecao-arquivo1" style="background-color: #3498db;border-radius: 5px;color: #fff;cursor: pointer;margin: 10px;padding: 6px 20px">Adicionar foto 1</label>
              <input type="file" id="selecao-arquivo1" style="display:none">
              <img id="img1" style="width:100px;" class="m-1">
          </div>
          
          <script>
            $(function(){
              $('#selecao-arquivo1').change(function(){
                const file = $(this)[0].files[0]
                const fileReader = new FileReader()
                fileReader.onloadend = function() {
                    $('#img1').attr('src', fileReader.result)
                }
                fileReader.readAsDataURL(file)
              })
            })
          </script>

           <!-- Imagem 2 -->

          <div class="col-3 d-flex align-items-center">
            <label for="selecao-arquivo2" style="background-color: #3498db;border-radius: 5px;color: #fff;cursor: pointer;margin: 10px;padding: 6px 20px">Adicionar foto 2</label>
            <input type="file" id="selecao-arquivo2" style="display:none">
            <img id="img2" style="width:100px;" class="m-1">
          </div>

          <script>
          $(function(){
            $('#selecao-arquivo2').change(function(){
              const file = $(this)[0].files[0]
              const fileReader = new FileReader()
              fileReader.onloadend = function() {
                  $('#img2').attr('src', fileReader.result)
              }
              fileReader.readAsDataURL(file)
            })
          })
          </script>

           <!-- Imagem 3 -->

          <div class="col-3 d-flex align-items-center">
            <label for="selecao-arquivo3" style="background-color: #3498db;border-radius: 5px;color: #fff;cursor: pointer;margin: 10px;padding: 6px 20px">Adicionar foto 3</label>
            <input type="file" id="selecao-arquivo3" style="display:none">
            <img id="img3" style="width:100px;" class="m-1">
          </div>

          <script>
          $(function(){
            $('#selecao-arquivo3').change(function(){
              const file = $(this)[0].files[0]
              const fileReader = new FileReader()
              fileReader.onloadend = function() {
                  $('#img3').attr('src', fileReader.result)
              }
              fileReader.readAsDataURL(file)
            })
          })
          </script>

             <!-- Imagem 4 -->

          <div class="col-3 d-flex align-items-center">
            <label for="selecao-arquivo4" style="background-color: #3498db;border-radius: 5px;color: #fff;cursor: pointer;margin: 10px;padding: 6px 20px">Adicionar foto 4</label>
            <input type="file" id="selecao-arquivo4" style="display:none">
            <img id="img4" style="width:100px;" class="m-1">
          </div>

          <script>
          $(function(){
            $('#selecao-arquivo4').change(function(){
              const file = $(this)[0].files[0]
              const fileReader = new FileReader()
              fileReader.onloadend = function() {
                  $('#img4').attr('src', fileReader.result)
              }
              fileReader.readAsDataURL(file)
            })
          })
          </script>
          
          <div class="col-5 d-flex align-items-center">
            <label for="">Selecione a categoria: </label>
            <select name="" id="" class="form-control">
              <option value="">Roupas</option>
              <option value="">Enxovais</option>
              <option value="">Perfumes</option>
            </select>
          </div>

        </div>

      </form>
  </div>

    
    </div>
  <!-- /.container-fluid -->
  
</div>
<!-- End of Main Content -->  
@endsection
