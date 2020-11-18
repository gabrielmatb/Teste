<?php
    session_start(); 
    if (!isset($_SESSION['usuario']))
         Header("Location: ../Login/index.php");  

    require_once('../Conexao/conexao.php');
    $id = trim($_GET['id']);
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM roteador WHERE id=?";
    $query = $pdo->prepare($sql); 
    $query->execute(array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $marca = $dados['marca'];
    $usuario = $dados['usuario'];
    $senha = $dados['senha'];

    Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Remover Roteador</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="container col s12">
        <div class="texto">
            <h4>Remover Roteador</h4>
        </div>

        <div class="row">
            <form action="../PHP/removerRoteador.php" method="post" id="frmRemoverRoteador" name="frmRemoverRoteador" class="col s12">
                <!--Campos de Valores -->
                <div class= "input-field col s8">
                    <div class="row">
                        <label for="lblID"><blockquote>ID: <?php echo $id;?></blockquote></label>
                        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                    </div>
                </div>  
                <div class="input-field col s8">
                    <label for="lblMarca">Marca: <?php echo $marca;?></label>
                </div>
                <div class="input-field col s8">
                    <label for="lblUsuario">Usuário: <?php echo $usuario;?></label>
                </div>
                <div class="input-field col s8">
                    <label for="lblSenha">Senha: <?php echo $senha;?></label>
                </div>

                <!-- Botões -->
                <div class="input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light blue accent-3" type="submit" name="botaoInserir">Remover
                        <i class="material-icons right"> remove_circle_outline</i>
                    </button>

                    <button class="btn waves-effect waves-light grey darken-2" type="button" name="botaoVoltar" 
                        onclick="JavaScript:location.href='../listarRoteador.php'">Voltar
                        <i class="material-icons right"> chevron_left </i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>