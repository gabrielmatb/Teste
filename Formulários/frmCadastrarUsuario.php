<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastrar Usuário</title>

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
            <h4>Cadastrar Usuário</h4>
        </div>

        <div class="row">
            <form action="../PHP/cadastrarUsuario.php" method="post" id="frmcadastrarUsuario" name="frmCadastrarUsuario" class="col s12">
                <!--Campos de Valores -->
                
                <div class="input-field col s8">
                    <label for="lblUsuario">Informe o Usuário: </label>
                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" minlenght="1" maxlenght="20" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblSenha">Informe a Senha: </label>
                    <input type="password" class="form-control" id="txtSenha" name="txtSenha" minlenght="1" maxlenght="20" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblNome">Informe o Nome: </label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" minlenght="1" maxlenght="25" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblEmail">Informe o Email: </label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" minlenght="1" maxlenght="35" required>
                </div>
                <div class="input-field col s8">
                    <label for="lblCargo">Informe o Cargo: </label>
                    <input type="text" class="form-control" id="txtCargo" name="txtCargo" minlenght="1" maxlenght="25" required>
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
                        onclick="JavaScript:location.href='../Login/index.php'">Voltar
                        <i class="material-icons right"> chevron_left </i>
                    </button>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>