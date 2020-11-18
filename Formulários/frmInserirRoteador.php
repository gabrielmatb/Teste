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
    <title>Formulário Inserir Roteador</title>

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
            <h4>Inserir Novo Roteador</h4>
        </div>

        <div class="row">
            <form action="../PHP/inserirRoteador.php" method="post" id="frmInserirRoteador" name="frmInserirRoteador" class="col s12">
                <!--Campos de Valores -->
                <div class="input-field col s8">
                    <label for="lblMarca">Informe a Marca: </label>
                    <input type="text" class="form-control" id="txtMarca" name="txtMarca" minlenght="1" maxlenght="20" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblUsuario">Informe o Usuário: </label>
                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" minlenght="1" maxlenght="15" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblSenha">Informe a Senha: </label>
                    <input type="password" class="form-control" id="txtSenha" name="txtSenha" minlenght="1" maxlenght="20" required>
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
                        onclick="JavaScript:location.href='../listarRoteador.php'">Voltar
                        <i class="material-icons right"> chevron_left </i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>