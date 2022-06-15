<?php 

include "../config/connection.php";

//$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);

//preparar
$stmt = $connect->prepare("INSERT INTO users (login, senha) VALUES(:LOGIN, :SENHA)");

//tratar
//$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':SENHA', $senha);

//executar
$stmt->execute();

header("Location:cad_user.php");

?>
