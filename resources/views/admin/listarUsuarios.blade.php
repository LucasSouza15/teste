@extends('admin.layouts.app')
@section('conteudoAdmin')


        <div class="container">
          <h1 class="mb-5">Vendedores</h1>
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm ">
              <thead>
                  <tr  class="bg-primary text-white">
                    <th scope="col">Foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Ações</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                @if ($user->is_admin == '1' || $user->is_admin == '2')
                  <tr>
                      <th scope="row">
                        <img src="{{asset('storage/' .  $user->image)}}" alt="" style="width: 50px;heigth:50px;">
                      </th>
                      <th scope="row">{{$user->name}}</th>
                      <th scope="row">
                        @if ($user->is_admin == '1')
                            Admin
                        @elseif ($user->is_admin == '2')
                            Vendedor 
                        @endif
                      </th>
                      <th scope="row">
                        
                          <a href="#" data-toggle="modal" data-target="#logoutModal">
                            <button type="submit" class="btn">
                              <i class="fas fa-trash-alt fa-lg text-danger"></i>
                            </button>
                          </a>
                        
                        
                      </th>
                  </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Quer excluir esse vendedor? </h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                  </button>
                </div>
                <div class="modal-body">Se clicar em excluir todas as vendas e dados do vendedor serão apagados !</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form action="{{route('admin.deletarUsuario' , $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" >
                    Excluir
                  </button>              
                </form>
                </div>
              </div>
            </div>
          </div>
    
      </div>
    <!-- /.container-fluid -->
    
    </div>
    <!-- End of Main Content -->  
@endsection
