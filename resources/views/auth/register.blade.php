<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RJ Luxuria - Nova Conta</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('app-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('app-assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>


              <form action="./routers.php?acao=cadastraConta" method="post" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="nome" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome">
                  </div>
                  <div class="col-sm-6">
                    <input name="sobrenome" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Sobrenome">
                  </div>
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="E-mail">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="senha" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                  </div>
                  <div class="col-sm-6">
                    <input name="resenha" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Senha">
                  </div>
                </div>
                <div class="form-group">
                  <input name="foto" type="file" class="form-group" id="inputName2" placeholder="Name"/>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">Criar nova Conta</button>
                
                <hr>

                <button disabled class="btn btn-google btn-user btn-block"><i  class="fab fa-google fa-fw"></i>Entrar com a conta do Google</button>

                <button disabled class="btn btn-facebook btn-user btn-block"><i class="fab fa-facebook-f fa-fw"></i>Registrar com o Facebook</button>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="#">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('app-assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('app-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('app-assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('app-assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
