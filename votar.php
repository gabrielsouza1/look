<?php
session_start();
include_once("conexao/conexao.php");
//Verificar se está vindo a variável id pela URL

if(isset($_GET['id'])){
	if(isset($_COOKIE['voto_cont'])){
		$_SESSION['msg'] = "<div class='alert alert-danger'>Você já votou!</div>";
		header("Location: visitas.php");
	}else{
		setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 5);
		$result_produto = "UPDATE informatica SET qnt_voto=qnt_voto + 1

		WHERE id ='".$_GET['id']."'"; 

		//Quimica
		$resultado_produto = mysqli_query($conn, $result_produto);
		setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 5);
		$result_produto = "UPDATE quimica SET qnt_voto=qnt_voto + 1
		
		WHERE id ='".$_GET['id']."'"; 
		//Agropecuaria
		$resultado_produto = mysqli_query($conn, $result_produto);
		setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 5);
		$result_produto = "UPDATE agropecuaria SET qnt_voto=qnt_voto + 1
		
		WHERE id ='".$_GET['id']."'"; 
		$resultado_produto = mysqli_query($conn, $result_produto);
		if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "<div class='alert alert-success'>Voto recebido com sucesso!</div>";
			header("Location: visitas.php");
		}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao votar!</div>";
			header("Location: visitas.php");
		}
	}
}