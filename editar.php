<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Alteração do Produtos | WIKA Estoques </title>
  <link rel="stylesheet" href="cad.css" type="text/css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-gray navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-caret-square-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Sair do sistema
          </a>
          
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-2">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="logo_size_invert.jpg" alt="WIKA Logo" class="brand-image img-circle elevation-6" style="opacity: .8">
      <span class="titulosid">WIKA Estoques</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="titulopan"><strong>Página Principal</strong></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item" style="--clr:#ffffff">
                <a href="cad.produtos.php" class="nav-link">             
                  <p class="link-item">
                    Cadastro de Produtos
                  </p>
                </a>
              </li>
              <li class="nav-item" style="--clr:#ffffff">
                <a href="listagem.php" data-text="listagem" class="nav-link">    
                  <p class="link-item">
                    Listagem de Produtos
                  </p>
                </a>
              </li>
              <!--<li class="nav-item" style="--clr:#ffffff">
                <a href="entrada.php" data-text="entrada" class="nav-link">         
                  <p class="link-item">
                    Entrada
                  </p>
                </a>
              </li>
              <li class="nav-item" style="--clr:#ffffff">
                <a href="saida.php" data-text="saida" class="nav-link">
                  <p class="link-item">
                    Saída
                  </p>
                </a>
              </li> -->     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Contato</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                include_once('conexao.php');
                $id=$_GET['idUp'];
                $select = "SELECT * FROM produtos WHERE CodRefProduto=:id";
                try{
                    $resultSel = $conect->prepare($select);
                    $resultSel->bindParam(':id',$id,PDO::PARAM_INT);
                    $resultSel->execute();

                    $contar=$resultSel->rowCount();
                    if($contar>0){
                        while($show = $resultSel->FETCH(PDO::FETCH_OBJ)){
                            $id = $show->CodRefProduto;
                            $nomeCont = $show->nomeproduto;
                            $qntdCont = $show->qntd;
                            $precoCont = $show->preco;
                            $validadeCont = $show->validade;
                            $registroCont = $show->registro;
                        }  
                    }else{
                        echo '<div class="alert alert-danger">
                    Contato não Cadastrado!</div>';
                    }
                }catch(PDOException $e){
                  echo "<strong>ERRO DE SELECT NO PDO: </strong>".$e->getMessage();
                }
                

              ?>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nome do Produto</label>
                    <input name="nome" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $nomeCont; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantidade</label>
                    <input name="qntd" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $qntdCont; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Preço</label>
                    <input name="preco" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $precoCont; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Validade</label>
                    <input name="validade" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $validadeCont; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Registro</label>
                    <input name="registro" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $registroCont; ?>">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="btnUpProduto" type="submit" class="button-42">Editar Contato</button>
                </div>
              </form>
              <?php
                  
                  if(isset($_POST['btnUpProduto'])){
                      $nomeproduto = $_POST['nome'];
                      $qntd = $_POST['qntd'];
                      $preco = $_POST['preco'];
                      $validade = $_POST['validade'];
                      $registro = $_POST['registro'];

                      $editar = "UPDATE produtos SET nomeproduto=:nome, qntd=
                      :qntd,preco=:preco,validade=:validade,registro=:registro WHERE 
                      CodRefProduto=:id";
                      try{
                        $result = $conect->prepare($editar);
                        $result->bindParam(':id',$id,PDO::PARAM_STR);
                        $result->bindParam(':nome',$nomeproduto,PDO::PARAM_STR);
                        $result->bindParam(':qntd',$qntd,PDO::PARAM_STR);
                        $result->bindParam(':preco',$preco,PDO::PARAM_STR);
                        $result->bindParam(':validade',$validade,PDO::PARAM_STR);
                        $result->bindParam(':registro',$registro,PDO::PARAM_STR);
                        $result->execute();

                        $contar = $result->rowCount();
                        if($contar > 0){
                          echo '<div class="container">
                                    <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> OK!</h5>
                                    Produto alterado com sucesso !!!
                                  </div>
                                </div>';
                        }else{
                          echo '<div class="container">
                                    <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                    Produto não alterado!!!
                                  </div>
                                </div>';
                        }
                      }catch(PDOException $e){
                        echo "<strong>ERRO DE CADASTRO PDO = </strong>".$e->getMessage();
                      }








                      

                      
                  }
              ?>
            </div>
          </div>
          
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="text-align: center;">
    Copyright &copy; 2022 - Todos os direitos reservados a
    <strong>WIKA Estoques</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>