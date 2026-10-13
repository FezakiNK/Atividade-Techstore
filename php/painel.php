<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit;
}

$perfil = $_SESSION["perfil"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Painel - TechStore</title>
</head>

<body>

    <h2>Olá, <?php echo $_SESSION["nome"]; ?>!</h2>

    <?php if ($perfil == "administrador") { ?>

    <h3>Painel Administrativo</h3>
    <a href="usuarios.php">Usuários</a><br>
    <a href="produtos.php">Produtos</a><br>
    <a href="relatorios.php">Relatórios</a>

    <?php } elseif ($perfil == "funcionario") { ?>

    <h3>Painel do Funcionário</h3>
    <a href="cadastrar_produto.php">Cadastrar Produto</a><br>
    <a href="produtos.php">Consultar Produtos</a>

    <?php } else { ?>

    <h3>Painel do Cliente</h3>
    <a href="produtos.php">Visualizar Produtos</a><br>
    <a href="perfil.php">Meu Perfil</a>

    <?php } ?>

    <br><br>
    <a href="sair.php">Sair</a>

</body>

</html>