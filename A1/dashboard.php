<?php
include 'Classes/Sessao.php';

Sessao::iniciar();

if (!Sessao::get('usuario_nome')) {
    header("Location: Cadastro_Login/login.php");
    exit;
}

$nome = Sessao::get('usuario_nome');
$email_cookie = $_COOKIE['email'] ?? 'Cookie não definido';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($nome); ?>!</h2>
    <p>Email: <?php echo htmlspecialchars(Sessao::get('usuario_email')); ?></p>
    <p>Email salvo no Cookie: <?php echo htmlspecialchars($email_cookie); ?></p>
    <p><a href="Cadastro_Login/logout.php">Logout</a></p>
</body>
</html>