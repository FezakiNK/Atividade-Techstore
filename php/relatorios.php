<?php
session_start();
include "conexao.php";

if (!isset($_SESSION["id"]) || $_SESSION["perfil"] != "administrador")
    die("Acesso negado!");

$usuarios = $conn->query("SELECT COUNT(*) total FROM usuarios")->fetch_assoc()["total"];
$produtos = $conn->query("SELECT COUNT(*) total FROM produtos")->fetch_assoc()["total"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Relatórios</h2>

<p>Total de usuários: <?php echo $usuarios; ?></p>
<p>Total de produtos: <?php echo $produtos; ?></p>

<a href="painel.php">Voltar</a>

</body>
</html>
