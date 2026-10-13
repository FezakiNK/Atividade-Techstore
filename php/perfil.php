<?php
session_start();

if (!isset($_SESSION["id"]) || $_SESSION["perfil"] != "cliente")
    die("Acesso negado!");
?>

<h2>Meu Perfil</h2>

<p>Nome: <?php echo $_SESSION["nome"]; ?></p>
<p>Perfil: Cliente</p>

<a href="painel.php">Voltar</a>
