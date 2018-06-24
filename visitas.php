<?php
session_start();
include_once("conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Votacao</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/personalizado.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		<h3>Vote na sua camiseta!</h3>
			<h2>Tecnico em informatica</h2>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?>
			<div class="row">
				<?php
				//Pesquisar os produtos
				$result_produto = "SELECT * FROM informatica";
				$resultado_produto = mysqli_query($conn, $result_produto);
				
				while($row_produto = mysqli_fetch_assoc($resultado_produto)){
					?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<div class="caption">
								<p style="padding-top: 70px;">

								</p>
							</div>
							<img src="imagens/<?php echo $row_produto['imagem']; ?>">
						</div>
						<div class="descricao">

									<a href="votar.php?id=<?php echo $row_produto['id']; ?>" class="btn btn-success">
										Votar
									</a>
							<h3><?php echo $row_produto['nome']; ?></h3>
						</div>
					</div><?php
				}
				?>
			</div>
		</div>
		<div class="container">
			<h2>Tecnico em Agropecuaria</h2>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?>
			<div class="row">
				<?php
				//Pesquisar os produtos
				$result_produto = "SELECT * FROM agropecuaria";
				$resultado_produto = mysqli_query($conn, $result_produto);
				
				while($row_produto = mysqli_fetch_assoc($resultado_produto)){
					?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<div class="caption">
								<p style="padding-top: 70px;">

								</p>
							</div>
							<img src="imagens/<?php echo $row_produto['imagem']; ?>">
						</div>
						<div class="descricao">

									<a href="votar.php?id=<?php echo $row_produto['id']; ?>" class="btn btn-success">
										Votar
									</a>
							<h3><?php echo $row_produto['nome']; ?></h3>
						</div>
					</div><?php
				}
				?>
			</div>
		</div>
		
				<div class="container">
			<h2>Tecnico em Quimica</h2>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?>
			<div class="row">
				<?php
				//Pesquisar os produtos
				$result_produto = "SELECT * FROM quimica";
				$resultado_produto = mysqli_query($conn, $result_produto);
				
				while($row_produto = mysqli_fetch_assoc($resultado_produto)){
					?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<div class="caption">
								<p style="padding-top: 70px;">

								</p>
							</div>
							<img src="imagens/<?php echo $row_produto['imagem']; ?>">
						</div>
						<div class="descricao">

									<a href="votar.php?id=<?php echo $row_produto['id']; ?>" class="btn btn-success">
										Votar
									</a>
							<h3><?php echo $row_produto['nome']; ?></h3>
						</div>
					</div><?php
				}
				?>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/personalizado.js"></script>
	</body>
</html>