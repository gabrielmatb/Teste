<?php
    session_start(); 
    if (!isset($_SESSION['usuario']))
         Header("Location: ../Login/index.php");  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Inserir Rede</title>

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
            <h4>Inserir Nova Rede</h4>
        </div>

        <div class="row">
            <form action="../PHP/inserirRede.php" method="post" id="frmInserirRede" name="frmInserirRede" class="col s12">
                <!--Campos de Valores -->
                <div class="input-field col s8">
                    <label for="lblIP">Informe o IP: </label>
                    <input type="text" class="form-control" id="txtIP" name="txtIP" minlenght="1" maxlenght="13" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblMascara">Informe a Mascara: </label>
                    <input type="text" class="form-control" id="txtMascara" name="txtMascara" minlenght="1" maxlenght="13" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblVelocidade">Informe a Velocidade: </label>
                    <input type="number" class="form-control" id="txtVelocidade" name="txtVelocidade" min=1 max = 999 required>
                </div>

                <!-- Botões -->
                <div class="input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light blue accent-3" type="submit" name="botaoInserir">Inserir
                        <i class="material-icons right"> check_circle </i>
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