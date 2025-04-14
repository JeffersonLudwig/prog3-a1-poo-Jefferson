<?php
   require_once '../Classes/Usuario.php';  
   require_once '../Classes/Autenticador.php'; 
   
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   
   if (empty($nome) || empty($email) || empty($senha)) {
    die("Todos os campos são obrigatórios.");
   }
   
   $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
   $usuario = new Usuario($nome, $email, $senha_hash);
   
   $conexao = new mysqli("localhost", "root", "", "A1");
   if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
   }
   
   $autenticador = new Autenticador($conexao);
   $autenticador->registrar($usuario);
   
   $conexao->close();
   header("Location: login.php");
   exit;
   ?>