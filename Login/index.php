<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <main>
                <div class="container center-align">
                    <div  class="z-depth-3 y-depth-3 x-depth-3 indigo darken-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; ">
                        <form action="login.php" method="POST" name="frmIndex">
                            <div class='row'>
                                <div class="input-field col s8">
                                    <label for="lblUsuario">Usuário: </label>
                                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" minlenght="1" maxlenght="20" required>
                                </div>
                                <div class="input-field col s8">
                                    <label for="lblSenha">Senha: </label>
                                    <input type="password" class="form-control" id="txtSenha" name="txtSenha" minlenght="1" maxlenght="35" required>
                                </div>
                            </div>
                            <div class='row'>
                                <button class="col s4 btn waves-effect waves-light grey darken-2" type="submit" name="botaoLogin">Login
                                <br>
                                <button class=" col s4 btn waves-effect waves-light black" type="button" name="botaoCadastrar" 
                                onclick="JavaScript:location.href='../Formulários/frmCadastrarUsuario.php'">Cadastre-se</button>
                                <button class="col s4 btn waves-effect waves-light brown darken-4" type="button" name="botaoVoltar" 
                                onclick="JavaScript:location.href='../Menu/index.html'">Voltar
                                <i class="material-icons right"> chevron_left </i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>