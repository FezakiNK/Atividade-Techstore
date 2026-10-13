<?php
include "conexao.php";

$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);
$senha = $_POST["senha"];
$confirmar = $_POST["confirmar"];
$perfil = $_POST["perfil"];

if (strlen($nome) < 3) die("Nome deve ter pelo menos 3 caracteres!");
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) die("E-mail inválido!");
if (strlen($senha) < 6) die("Senha deve ter pelo menos 6 caracteres!");
if ($senha != $confirmar) die("As senhas não coincidem!");

$r = $conn->query("SELECT id FROM usuarios WHERE email='$email'");
if ($r->num_rows > 0) die("E-mail já cadastrado!");

$senha = password_hash($senha, PASSWORD_DEFAULT);

$conn->query("INSERT INTO usuarios (nome,email,senha,perfil)
VALUES ('$nome','$email','$senha','$perfil')");

header("Location: index.php");
?>
