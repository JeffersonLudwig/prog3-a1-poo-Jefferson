<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="processa_cadastro.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Cadastrar">
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
</body>
</html>