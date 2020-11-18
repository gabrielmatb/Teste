<?php 
    require_once('../Conexao/conexao.php');

    $usuario = trim($_POST['txtUsuario']);
    $senha = md5(trim($_POST['txtSenha']));

    //recuperar usuario no banco de dados
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuarios WHERE usuario LIKE ?";
    $query = $pdo->prepare($sql);
    $query->execute(array($usuario));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $nome = $dados['nome'];
    Conexao::desconectar();

    //echo $senha,$dados['senha'];

    if($senha == $dados['senha']){
        
        session_start();

        $_SESSION['usuario'] = $usuario; 
        $_SESSION['nome'] = $nome;
        
        header("location:../listarRoteadorRede.php");
    }
    else header("location:index.php");

?>