<?php
    session_start(); 
    if (!isset($_SESSION['usuario']))
         Header("Location: Login/index.php"); 

    require_once('Conexao/conexao.php');  
    $pdo = Conexao::conectar(); 
    $sql = 'Select * from roteador order by marca;';
    $listaRoteadores = $pdo->query($sql); 
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Roteadores</title>

    <?php include_once"estilo.php"?>
</head>
<body>
    <div id="content">
        <div  class="row s10">

            <h3 class="text-amber">Listar Roteadores   
                <a class="btn-floating btn-large waves-effect blue darken-4"
                onclick="JavaScript:location.href='Formulários/frmInserirRoteador.php'"><i class="material-icons">add_circle</i></a>
            </h3>
        </div>
        <table  class="striped highlight light-blue darken-4 responsive-table">
            <tr  class = "black accent-1 white-text">
                <th>ID</th>
                <th>Marca</th>
                <th>Usuário</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
            <?php
                foreach ($listaRoteadores as $roteador) {
            ?> 
                <tr  class="white-text">
                    <td><?php echo $roteador['id']; ?></td>
                    <td><?php echo $roteador['marca']; ?> </td>
                    <td><?php echo $roteador['usuario']; ?></td>
                    <td><a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='Formulários/frmEditarRoteador.php?id=' + 
                                <?php echo $roteador['id'];?>">
                        <i class="material-icons">mode_edit</i></a></td>
                    <td><a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:location.href='Formulários/frmRemoverRoteador.php?id=' + 
                                <?php echo $roteador['id'];?>">
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