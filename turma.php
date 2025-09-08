<?php
    session_start();

    if (!isset($_SESSION["conectado"]) || $_SESSION["conectado"] != true) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas</title>
</head>
<body>
    <h3>Bem-vindo,
        <?php
            echo $_SESSION["nome_professor"];
        ?>!
    </h3>
    <a href="sair.php">
        <input type="button" value="sair" event="sair.php">
    </a>

    <br>
    <br>

    <h2>Turmas</h2>

    <br>

    <a href="cadastrar.php">
        <input type="button" value="cadastrar" event="cadastrar.php">
    </a>

    <br>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>