<?php
    session_start(); 
    if (!isset($_SESSION['usuario']))
         Header("Location: Login/index.php");  

    require_once('Conexao/conexao.php');  
    $pdo = Conexao::conectar(); 
    $sql = 'Select * from rede order by ip;';
    $listaRedes = $pdo->query($sql); 
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Redes</title>

    <?php include_once"estilo.php"?>
</head>
<body>
    <div id="content">
        <div  class="row s10">

            <h3 class="text-amber">Listar Redes   
                <a class="btn-floating btn-large waves-effect blue darken-4"
                onclick="JavaScript:location.href='Formulários/frmInserirRede.php'"><i class="material-icons">add_circle</i></a>
            </h3>
        </div>
        <table  class="striped highlight light-blue darken-4 responsive-table">
            <tr  class = "black accent-1 white-text">
                <th>ID</th>
                <th>IP</th>
                <th>Máscara</th>
                <th>Velocidade</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
            <?php
                foreach ($listaRedes as $rede) {
            ?> 
                <tr  class="white-text">
                    <td><?php echo $rede['id']; ?></td>
                    <td><?php echo $rede['ip']; ?> </td>
                    <td><?php echo $rede['mascara']; ?></td>
                    <td><?php echo  number_format($rede['velocidade']); ?></td>
                    <td><a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='Formulários/frmEditarRede.php?id=' + 
                                <?php echo $rede['id'];?>">
                        <i class="material-icons">mode_edit</i></a></td>
                    <td><a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:location.href='Formulários/frmRemoverRede.php?id=' + 
                                <?php echo $rede['id'];?>">
                        <i class="material-icons">remove_circle</i></a></td>
                </tr>
            <?php
            } 
            ?>

        </table>
    </div>
    <script src="MenuInterno/main.js"></script>
</body>
</html>