<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esse site tem como base organizar e trazer eficiência para o controle e gerenciamento do seus estoques.">
    <title>Controle de estoques WIKA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <header>
        <img src="logo_size_invert.jpg" alt="logo-wika" style="border-radius: 100%; width: 95px">
        <nav>
            <h1>WIKA Estoques</h1> 
        </nav>
    </header>
    <hr style="width: 104%">
    <br>
    <main>
        <div style="text-align: center">
            <h2>Insira aqui o seu login</h2>
            <h2>na <strong>Wika Estoques</strong></h2>
            <br>
         <br>
         <br>
         <form>
          <form action="" method="post" enctype="multipart/form-data">
                  <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">E-mail</label>
                  <div class="col-sm-7">
                  <input type="username" class="form-control" name="username "id="username" required placeholder="Insira seu email...">
                  </div>
                      <div class="input-group-append">
                      <span class="fas fa-envelope"></span>
                       </div>
                      </div>
                <div class="row mb-3">
                <label for="inputSenha3" class="col-sm-3 col-form-label">Senha</label>
                <div class="col-sm-7">
                <input type="Password" class="form-control"  required placeholder="Insira sua senha..." name="senha"id="senha">
                <div class="input-group-append">
                  <span class="fas fa-lock"></span>
                  </div>
                  </div>
                  </div>
                <br>
                <br>
                <button name="botao" type="submit" class="btn btn-primary">Acessar</button>
                <div class="login"></div> 
                <br>
                <a href="cadastro.php">Não possui uma conta?</a>    
               </form>
            </div>
        </div>
        </form>
        </form>
    </main>

</body>
</html>