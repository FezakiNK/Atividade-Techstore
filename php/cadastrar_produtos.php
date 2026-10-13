<?php
session_start();

if (!isset($_SESSION["id"]) || $_SESSION["perfil"] != "funcionario")
    die("Acesso negado!");
?>

<h2>Cadastrar Produto</h2>

<form action="cadastrar_produto.php" method="post">
    <input name="nome" placeholder="Nome" required>
    <input name="descricao" placeholder="Descrição" required>
    <input name="preco" type="number" step="0.01" placeholder="Preço" required>
    <input name="estoque" type="number" placeholder="Estoque" required>
    <button>Cadastrar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conexao.php";

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    $conn->query("INSERT INTO produtos(nome,descricao,preco,estoque)
    VALUES('$nome','$descricao','$preco','$estoque')");

    echo "Produto cadastrado!";
}
?>

<br><a href="painel.php">Voltar</a>
