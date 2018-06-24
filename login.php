<?php
require_once 'conexao/conexao.php';

//verifica se veio um e-mail por formulário
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //gera o SQL de consulta ao banco de dados para ver se o email fornecido existe.
    $sql = "SELECT * FROM usuarios WHERE email = '" . $email . "';";

    //executa o SQL e guarda o resultado na variavel $query    
    $query = mysqli_query($con, $sql);

    //coloca o resultado da variavel em um array
    $dados = mysqli_fetch_array($query);

    //verifica se voltou resultado
    if (isset($dados)) {
        //confere se a senha que veio do banco de dados é igual a informada no formulário
        // o comando decode, descriptografa a senha que veio do banco de dados
        if (base64_decode($dados['senha']) == $senha) {
            //se a senha conferir manda o usuário para o painel
            header('Location: painel/painel.php');
        } else {
            //caso a senha não confira retorna para a tela de inicio com erro
            header('Location: index.php?erro=login');
        }
    } else {
        //caso não retorna resultado do email, retorna para a tela de inicio com erro
        header('Location: index.php?erro=login');
    }
}
?>
<html>
<head>
<title>Look</title>
</head>
<body>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="admin.php" method="POST">
      <input type="email" name="email" placeholder="email" placeholder="E-mail"/>
      <input type="password" name="senha" placeholder="Senha" placeholder="Senha"/>
      <button>login</button>
    </form>
  </div>
</div>
</body>
</html>