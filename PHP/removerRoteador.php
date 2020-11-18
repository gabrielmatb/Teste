<?php 
    require_once('../Conexao/conexao.php'); 
    $id = trim($_POST['id']); 

    if (!empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM roteador WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($id));
        Conexao::desconectar(); 
    }
    header("location:../listarRoteador.php");
?>