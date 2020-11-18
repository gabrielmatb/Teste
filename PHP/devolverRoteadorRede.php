<?php 
    require_once('../Conexao/conexao.php'); 

    $id = trim($_POST['id']);
    $roteadorID = trim($_POST['txtRoteadorID']);
    $redeID = trim($_POST['txtRedeID']);
    $dataFim = trim($_POST['txtDataFim']);

    if (!empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE roteadorrede SET dataFim=? WHERE id=?;";
        $query = $pdo->prepare($sql); 
        $query->execute(array($dataFim, $id));

    //roteador mudar situação
    $sql = "UPDATE roteador SET situacao=? WHERE id=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array(0, $roteadorID));

    //rede mudar situação
    $sql = "UPDATE rede SET situacao=? WHERE id=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array(0, $redeID));

        Conexao::desconectar(); 
    }
    header("location:../listarRoteadorRede.php");
?>