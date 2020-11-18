<?php
    require_once('../Conexao/conexao.php');

    $usuario = trim($_POST['txtUsuario']);
    $senha = md5(trim($_POST['txtSenha']));
    $nome = trim($_POST['txtNome']);
    $email = trim($_POST['txtEmail']);
    $cargo = trim($_POST['txtCargo']);

    if(!empty($usuario) && !empty($senha) && !empty($nome) && !empty($email) && !empty($cargo)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO usuarios (usuario, senha, nome, email, cargo) VALUES(?, ?, ?, ?, ?);";
        $query = $pdo->prepare($sql); 
        $query->execute(array($usuario, $senha, $nome, $email, $cargo));
        Conexao::desconectar();
    }
    header("location:../Login/index.php");
?>