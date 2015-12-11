<?php
$login = $_POST["login"];
$senha2 = $_POST["senha2"];
include "config.php";




$confirmacao = mysql_query("SELECT * FROM t_cliente WHERE LOGIN = '$login'AND SENHA = '$senha2'"); 
$contagem = mysql_num_rows($confirmacao); 

if ( $contagem == 1 ) {
  setcookie ("login", $login); 
  setcookie ("senha", $senha2); 
  echo "Usuário logado.";
  } else {
  echo "Login ou senha inválidos. <a href=java script:history.go(-1)>Clique aqui para voltar.</a>"; /
  }
?>