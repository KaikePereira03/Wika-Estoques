<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esse site tem como base organizar e trazer eficiência para o controle e gerenciamento do seus estoques.">
    <title>Controle de estoques WIKA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
</head>
<body>
    <header>
        <img src="logo_size_invert.jpg" alt="logo-wika" style="border-radius: 100%; width: 95px">
        <nav>
            <h1>WIKA Estoques</h1> 
        </nav>
    </header>
    <hr style="width: 104%">
    <section class="altura">

    </section>
    <br>
    <main>
        <div style="text-align: center">
            <h2>Inscreva-se agora</h2>
            <h2>na <strong>Wika Estoques</strong></h2>
            <br>
            <p>O cadastro na <strong>WIKA</strong> lhe proporciona a possibilidade de participar de nossos projetos oferecidos aos nossos clientes.</p>

         <br>
         <br>
         <form>
          <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                    <label class="col-sm-3 col-form-label">Nome Completo</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" id="nome" required placeholder="Digite seu nome...">
                    <div class="input-group-append">
                          <span class="fas fa-user"></span>
                          </div>
                          </div>
                          </div>
                  <div class="input-group mb-3">
                  <label class="col-sm-3 col-form-label">E-mail</label>
                  <div class="col-sm-7">
                  <input type="email" class="form-control" id="email" required placeholder="Digite seu email...">
                      <div class="input-group-append">
                      <span class="fas fa-envelope"></span>
                       </div>
                       </div>
                      </div>
                <div class="input-group mb-3">
                <label class="col-sm-3 col-form-label">Senha</label>
                <div class="col-sm-7">
                <input type="password" class="form-control" id="senha" required placeholder="Digite sua senha...">
                <div class="input-group-append">
                  <span class="fas fa-lock"></span>
                  </div>
                  </div>
                  </div>
                <div class="row mb-3">
                <div class="row-cols-md-4 offset-sm-3">
                <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" required>Aceitar os <strong><a href="termos.html">Termos de Serviços</a></strong>
                  </label>
                  </div>
                  </div>
                  </div>
                <br>
                <button type="submit" id="btnCadastro" class="btn btn-light btn-block"><strong>Cadastre-se</strong></button> 
               </form> 
            </div>
            <br>
        </form>
        </form>
    </main>
              <?php
                  include_once('../projeto/conexao.php');
                  if(isset ($_POST['btnCadastro'])){
                      $nome = $_POST['nome'];
                      $email = $_POST['email'];
                      $senha =$_POST['senha'];
                          $cadastro = "INSERT INTO usuario (Username, Email, Password, imagem, Dataregistro, permissão) VALUES (:nome,:email,:senha,:imagem,:dataregistro,:permissao)";
                      try{
                        $conect->prepare ($cadastro);
                        $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                        $result->bindParam(':email',$email,PDO::PARAM_STR);
                        $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                        $result->execute();
                        $contar = $result->rowCount();
                        if ($contar > 0){
                          echo '<div class="container">
                                <button class="btn btn-success btn-block"> CADASTRO EFETUADO COM SUCESSO! </button>
                                </div>';
                        }
                      else{
                          echo '<div class="container">
                                </div>';
                        }
                    }     
                      catch (PDOException $e){
                        echo "<strong> ERRO DE CADASTRO PDO = </strong>". $e->getMessage();
                      }
                      }
                  
              ?>
</body>
</html>