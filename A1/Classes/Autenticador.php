<?php
   require_once 'Usuario.php'; 
   
   class Autenticador {
    private $conexao;
   
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
   
    public function registrar(Usuario $usuario) {
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
   
        $stmt = $this->conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senha);
        $stmt->execute();
   
        return $this->conexao->insert_id;
    }
   
    public function login($email, $senha) {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
   
        if ($resultado->num_rows === 1) {
            $usuario_data = $resultado->fetch_assoc();
            if (password_verify($senha, $usuario_data['senha'])) {
                return new Usuario($usuario_data['nome'], $usuario_data['email'], $usuario_data['senha']);
            }
        }
        return null;
    }
   }
   ?>