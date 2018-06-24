<?php
include_once "conexao/conexao.php";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta name="description" content="Look">
        <link rel="icon" href="../img/system/w1.ico">

        <title>Look</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="padding-top: 70px; padding-bottom: 70px;">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">Look</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>                       

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Sair</a></li>                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
        	<div class="page-header">
    <h1>Lista de votos de Informatica</h1>
</div>

<div id="acoes" class="text-right row" style="margin-bottom: 10px;">   
   
</div>
<div id="table" class="row">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Código</th>
                <th>Modelo</th>
                <th>Quantidade de votos</th>
            </tr>
        </thead>
        <tbody>
           <?php
            $sql = "SELECT * FROM informatica";
            $query = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $dados['id'] ?></td>
                    <td><?= $dados['nome'] ?></td>
                    <td><img src="imagens/<?php echo $dados['imagem']; ?>" style="width:50px;"></td>
                    <td><?= $dados['qnt_voto'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
 <div class="page-header">
    <h1>Lista de votos de Quimica</h1>
</div>

<div id="acoes" class="text-right row" style="margin-bottom: 10px;">   
   
</div>
<div id="table" class="row">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Código</th>
                <th>Modelo</th>
                <th>Quantidade de votos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM quimica";
            $query = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $dados['id'] ?></td>
                    <td><?= $dados['nome'] ?></td>
                    <td><img src="imagens/<?php echo $dados['imagem']; ?>" style="width: 50px;"></td>
                    <td><?= $dados['qnt_voto'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<div class="page-header">
    <h1>Lista de votos de Agropecuaria</h1>
</div>

<div id="acoes" class="text-right row" style="margin-bottom: 10px;">   
   
</div>
 <div id="table" class="row">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Código</th>
                <th>Modelo</th>
                <th>Quantidade de votos</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
            <?php
            $sql = "SELECT * FROM agropecuaria";
            $query = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $dados['id'] ?></td>
                    <td><?= $dados['nome'] ?></td>
                    <td><img src="imagens/<?php echo $dados['imagem']; ?>" style="width:50px"></td>
                    <td><?= $dados['qnt_voto'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>