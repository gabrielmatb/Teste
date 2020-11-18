<?php
    session_start(); 
    /*if (!isset($_SESSION['usuario']))
         Header("Location: ../Login/index.php");*/

    require_once('../Conexao/conexao.php');
    $pdo = Conexao::conectar(); 
    $sql = 'Select * from roteador where situacao=0';
    $listaRoteadores = $pdo->query($sql); 

    $sql = 'Select * from rede where situacao=0';
    $listaRedes = $pdo->query($sql); 

    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Inserir Movimentação</title>

    <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=WUcv5MhrTCiwdhDbPlRjlCBOVRc-UfkFNVY_EI-55q-0I7IgKnLWQ_L3Cy7-cHDtH9H9IKPDXsq9cLAu3ykAPB3QXf4CIf50FUCcC_mXm0Jzhv488oYS9Iip0zERlBcz8EvYpblNtjSywWAwxaQPqA" charset="UTF-8"></script><script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 

    <link rel="stylesheet" type="text/css" href="../style.css">

    <script>
         $(document).ready(function() {
            $('select').material_select();
         });
    </script>
</head>
<body>
    <div class="container col s12">
        <div class="texto">
            <h4>Inserir Nova Movimentação</h4>
        </div>

        <div class="row">
            <form action="../PHP/inserirRoteadorRede.php" method="post" id="frmInserirRoteadorRede" name="frmInserirRoteadorRede" class="col s12">
                <!--Campos de Valores -->
                <div class="col s8">
                    <label for="lblMarca">Informe o Roteador: </label>
                    <select name="idRoteador">
                        <?php foreach ($listaRoteadores as $roteador){ ?>
                            <option value="<?php echo $roteador['id'] ?>"><?php echo $roteador['id'] ?></option>
                        <?php 
                        } 
                        ?>
                    </select>
                </div>
                <div class="col s8">
                    <label for="lblRede">Informe a Rede: </label>
                    <select name="idRede" id="idRede">
                        <?php foreach ($listaRedes as $rede){ ?>
                            <option value="<?php echo $rede['id'] ?>"><?php echo $rede['id'] ?></option>
                        <?php 
                        } 
                        ?>
                    </select>
                </div>
                <div class="col s8">
                    <label for="lblDataInicio">Informe a Data Início: </label>
                    <input type="date" class="form-control" id="txtDataInicio" name="txtDataInicio" required>
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
                        onclick="JavaScript:location.href='../listarRoteadorRede.php'">Voltar
                        <i class="material-icons right"> chevron_left </i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>