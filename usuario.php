<?php
if(isset($_GET['id'])){
    if(isset($_COOKIE['aluno'])){
        $_SESSION['msg'] = "<div class='alert alert-danger'>Você já votou!</div>";
        header("Location: index.php");
    }else{
        setcookie('aluno', $_SERVER['REMOTE_ADDR'], time() + 5);
        $result_produto = "INSERT INTO informatica (aluno) VALUES ('$aluno')

        WHERE id ='".$_GET['id']."'"; 
        ?>