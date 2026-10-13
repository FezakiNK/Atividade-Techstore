<?php
session_start();
include "conexao.php";

if (!isset($_SESSION["id"]) || $_SESSION["perfil"] != "administrador")
    die("Acesso negado!");

$r = $conn->query("SELECT id,nome,email,perfil FROM usuarios");
?>

<h2>Usuários</h2>

<?php while ($u = $r->fetch_assoc()) { ?>

<p>
<?php echo $u["nome"]; ?> -
<?php echo $u["email"]; ?> -
<?php echo $u["perfil"]; ?>
</p>

<?php } ?>

<a href="painel.php">Voltar</a>
