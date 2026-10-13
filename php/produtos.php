<?php
session_start();
include "conexao.php";

if (!isset($_SESSION["id"])) header("Location: index.php");

$r = $conn->query("SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Produtos</h2>

<?php while ($p = $r->fetch_assoc()) { ?>

<p>
<b><?php echo $p["nome"]; ?></b><br>
<?php echo $p["descricao"]; ?><br>
Preço: R$ <?php echo $p["preco"]; ?><br>
Estoque: <?php echo $p["estoque"]; ?>
</p>

<hr>

<?php } ?>

<a href="painel.php">Voltar</a>
</body>
</html>

