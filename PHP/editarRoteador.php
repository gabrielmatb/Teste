<?php
    require_once('../Conexao/conexao.php');

    $id = trim($_POST['id']);
    $marca = trim($_POST['txtMarca']);
    $usuario = trim($_POST['txtUsuario']);
    $senha = trim($_POST['txtSenha']);

    if(!empty($id) && !empty($marca) && !empty($usuario) && !empty($senha)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE roteador SET marca=?, usuario=?, senha=? WHERE id=?;";
        $query = $pdo->prepare($sql); 
        $query->execute(array($marca, $usuario, $senha, $id));
        Conexao::desconectar();
    }
    header("location:../listarRoteador.php");
?>