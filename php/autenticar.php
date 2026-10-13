<?php
session_start();
include "conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = $conn->query($sql);

if ($resultado->num_rows == 0) {
    die("E-mail ou senha incorretos!");
}

$usuario = $resultado->fetch_assoc();

if (!password_verify($senha, $usuario["senha"])) {
    die("E-mail ou senha incorretos!");
}

$_SESSION["id"] = $usuario["id"];
$_SESSION["nome"] = $usuario["nome"];
$_SESSION["perfil"] = $usuario["perfil"];

header("Location: painel.php");
exit;
?>
