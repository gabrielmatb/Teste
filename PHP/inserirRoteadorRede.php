<?php
    require_once('../Conexao/conexao.php');

    $roteadorID = trim($_POST['idRoteador']);
    $redeID = trim($_POST['idRede']);
    $dataInicio = trim($_POST['txtDataInicio']);

    if(!empty($roteadorID) && !empty($redeID) && !empty($dataInicio)){
        $dataFim = '1900-01-01';
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO roteadorrede (roteadorID, redeID, dataInicio, dataFim) VALUES(?, ?, ?, ?);";
        $query = $pdo->prepare($sql); 
        $query->execute(array($roteadorID, $redeID, $dataInicio, $dataFim));

        //roteador mudar situação
        $sql = "UPDATE roteador SET situacao=? WHERE id=?;";
        $query = $pdo->prepare($sql);
        $query->execute(array(1, $roteadorID));

        //rede mudar situação
        $sql = "UPDATE rede SET situacao=? WHERE id=?;";
        $query = $pdo->prepare($sql);
        $query->execute(array(1, $redeID));

        Conexao::desconectar();
    }
    header("location:../listarRoteadorRede.php");
?>