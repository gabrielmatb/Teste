<?php
    require_once('../Conexao/conexao.php');

    $ip = trim($_POST['txtIP']);
    $mascara = trim($_POST['txtMascara']);
    $velocidade = trim($_POST['txtVelocidade']);

    if(!empty($ip) && !empty($mascara) && !empty($velocidade)){
        $situacao = 0;
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO rede (ip, mascara, velocidade, situacao) VALUES(?, ?, ?, ?);";
        $query = $pdo->prepare($sql); 
        $query->execute(array($ip, $mascara, $velocidade, $situacao));
        Conexao::desconectar();
    }
    header("location:../listarRede.php");
?>