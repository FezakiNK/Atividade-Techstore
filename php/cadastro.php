<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="caixa">
    <h2>Cadastrar usuário</h2>

    <form action="cadastrar.php" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="password" name="confirmar" placeholder="Confirmar senha" required>

        <select name="perfil">
            <option value="cliente">Cliente</option>
            <option value="funcionario">Funcionário</option>
            <option value="administrador">Administrador</option>
        </select>

        <button>Cadastrar</button>
    </form>

    <a href="index.php">Voltar ao login</a>
</div>

</body>
</html>
