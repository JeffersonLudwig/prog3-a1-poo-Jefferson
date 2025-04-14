<?php
   require_once '../Classes/Autenticador.php'; 
   require_once '../Classes/Sessao.php';      
   require_once '../Classes/Usuario.php';      
   
   Sessao::iniciar();
   
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   
   $conexao = new mysqli("localhost", "root", "", "A1");
   if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
   }
   
   $autenticador = new Autenticador($conexao);
   $usuario = $autenticador->login($email, $senha);
   
   if ($usuario) {
    Sessao::set('usuario_nome', $usuario->getNome());
    Sessao::set('usuario_email', $usuario->getEmail());
   
    if (isset($_POST['lembrar'])) {
        setcookie('email', $email, time() + 3600 * 24 * 30);
    }
   
    $conexao->close();
    header("Location: ../dashboard.php");
    exit;
   } else {
    $conexao->close();
    echo "Login falhou. Credenciais incorretas.";
   }
   ?>