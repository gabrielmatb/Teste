<?php
    require_once('../Conexao/conexao.php');

    $id = trim($_POST['id']);
    $ip = trim($_POST['txtIP']);
    $mascara = trim($_POST['txtMascara']);
    $velocidade = trim($_POST['txtVelocidade']);

    if(!empty($id) && !empty($ip) && !empty($mascara) && !empty($velocidade)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE rede SET ip=?, mascara=?, velocidade=? WHERE id=?;";
        $query = $pdo->prepare($sql); 
        $query->execute(array($ip, $mascara, $velocidade, $id));
        Conexao::desconectar();
    }
    header("location:../listarRede.php");
?>