<?php
    require_once('../Conexao/conexao.php');

    $marca = trim($_POST['txtMarca']);
    $usuario = trim($_POST['txtUsuario']);
    $senha = trim($_POST['txtSenha']);

    if(!empty($marca) && !empty($usuario) && !empty($senha)){
        $situacao = 0;
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO roteador (marca, usuario, senha, situacao) VALUES(?, ?, ?, ?);";
        $query = $pdo->prepare($sql); 
        $query->execute(array($marca, $usuario, $senha, $situacao));
        Conexao::desconectar();
    }
    header("location:../listarRoteador.php");
?>