<?php
    session_start(); 
    if (!isset($_SESSION['usuario']))
         Header("Location: ../Login/index.php");  

    require_once('../Conexao/conexao.php');
    $id = trim($_GET['id']);
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM rede WHERE id=?";
    $query = $pdo->prepare($sql); 
    $query->execute(array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $ip = $dados['ip'];
    $mascara = $dados['mascara'];
    $velocidade = $dados['velocidade'];

    Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Editar Rede</title>

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
            <h4>Editar Rede</h4>
        </div>

        <div class="row">
            <form action="../PHP/editarRede.php" method="post" id="frmEditarRede" name="frmEditarRede" class="col s12">
                <!--Campos de Valores -->
                <div class= "input-field col s8">
                    <div class="row">
                        <label for="lblID"><blockquote>ID: <?php echo $id;?></blockquote></label>
                        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                    </div>
                </div>  
                <div class="input-field col s8">
                    <label for="lblIP">Informe o IP: </label>
                    <input type="text" class="form-control" id="txtIP" name="txtIP" minlenght="1" maxlenght="13" value="<?php echo $ip;?>" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblMascara">Informe a Mascara: </label>
                    <input type="text" class="form-control" id="txtMascara" name="txtMascara" minlenght="1" maxlenght="13" value="<?php echo $mascara;?>" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblVelocidade">Informe a Velocidade: </label>
                    <input type="number" class="form-control" id="txtVelocidade" name="txtVelocidade" min=1 max=999 value="<?php echo $velocidade;?>" required>
                </div>

                <!-- Botões -->
                <div class="input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light blue accent-3" type="submit" name="botaoInserir">Editar
                        <i class="material-icons right"> done </i>
                    </button>

                    <button class="btn waves-effect waves-light brown" type="reset" name="botaoResetar">Resetar
                        <i class="material-icons right"> clear </i>
                    </button>

                    <button class="btn waves-effect waves-light grey darken-2" type="button" name="botaoVoltar" 
                        onclick="JavaScript:location.href='../listarRede.php'">Voltar
                        <i class="material-icons right"> chevron_left </i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>