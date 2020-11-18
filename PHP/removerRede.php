<?php 
    require_once('../Conexao/conexao.php'); 
    $id = trim($_POST['id']); 

    if (!empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM rede WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($id));
        Conexao::desconectar(); 
    }
    header("location:../listarRede.php");
?>