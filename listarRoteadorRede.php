<?php
    session_start(); 
    if (!isset($_SESSION['usuario']))
         Header("Location: Login/index.php"); 

    require_once('Conexao/conexao.php');  
    $pdo = Conexao::conectar(); 
    $sql = 'Select * from roteadorrede order by id;';
    $listaRoteadorRede = $pdo->query($sql); 
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Movimentações</title>

    <?php include_once"estilo.php"?>
</head>
<body>
    <div id="content">
        <div  class="row s10">

            <h3 class="text-amber">Listar Movimentações   
                <a class="btn-floating btn-large waves-effect blue darken-4"
                onclick="JavaScript:location.href='Formulários/frmInserirRoteadorRede.php'"><i class="material-icons">add_circle</i></a>
            </h3>
        </div>
        <table  class="striped highlight light-blue darken-4 responsive-table">
            <tr  class = "black accent-1 white-text">
                <th>ID</th>
                <th>Roteador</th>
                <th>Rede</th>
                <th>Data Início</th>
                <th>Data Fim</th>
                <th>Devolver</th>
            </tr>
            <?php
                foreach ($listaRoteadorRede as $roteadorRede) {
            ?> 
                <tr  class="white-text">
                    <td><?php echo $roteadorRede['id']; ?></td>
                    <td><?php echo $roteadorRede['roteadorID']; ?> </td>
                    <td><?php echo $roteadorRede['redeID']; ?></td>
                    <td><?php echo $roteadorRede['dataInicio']; ?></td>
                    <td><?php echo $roteadorRede['dataFim']; ?></td>
                    <td><a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:location.href='Formulários/frmDevolverRoteadorRede.php?id=' + 
                                <?php echo $roteadorRede['id'];?>">
                        <i class="material-icons">reply</i></a></td>
                </tr>
            <?php
            } 
            ?>

        </table>
    </div>
    <script src="MenuInterno/main.js"></script>
</body>
</html>