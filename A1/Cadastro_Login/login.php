<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processa_login.php" method="post">
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="checkbox" name="lembrar" value="1"> Lembrar e-mail<br>
        <input type="submit" value="Login">
    </form>
    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>