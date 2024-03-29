<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="css/styleusuario.css">
    <title>Menu do Usuário Administrador</title>
</head>

<body>
    <nav>
        <label for="btn" class="button">Menu de Usuário
            <span class="fas fa-caret-down"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li>
                <label for="btn-2" class="first">Cadastros
                    <span class="fas fa-caret-down"></span>
                </label>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="cadastrodesastre_add.php">Desastre</a></li>
                    <li><a href="cadastrovitimas_add.php">Vítimas</a></li>
                    <li><a href="cadunidadeatend_add.php">Unidade de Atendimento</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-3" class="second">Atualizar Cadastros
                    <span class="fas fa-caret-down"></span>
                </label>
                <input type="checkbox" id="btn-3">
                <ul>
                    <li><a href="cadastropessoas_upd.php">Usuário</a></li>
                    <li><a href="cadastrodesastre_upd.php">Desastre</a></li>
                    <li><a href="cadastrovitimas_upd.php">Vítimas</a></li>
                    <li><a href="cadunidadeatend_upd.php">Unidade de Atendimento</a></li>
                </ul>
            </li>
            <li><a href="informacoes.php">Buscas</a></li>
        </ul>
    </nav>
    <script>
        $('nav .button').click(function () {
            $('nav .button span').toggleClass("rotate");
        });
        $('nav ul li .first').click(function () {
            $('nav ul li .first span').toggleClass("rotate");
        });
        $('nav ul li .second').click(function () {
            $('nav ul li .second span').toggleClass("rotate");
        });
    </script>
</body>

</html>
