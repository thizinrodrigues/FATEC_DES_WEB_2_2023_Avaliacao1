<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Biblioteca Fatec</h2>
        <p>Favor inserir os dados abaixo:</p>
        <form action="formulario.php" method="post">
            <div class="form-group">
                <label>Nome do Aluno</label>
                <br>
                <input type="text" id="nome" name="nome"><br><br>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Data</label>
                <br>
                <input type="text" id="data" name="data"><br><br>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Livro</label>
                <br>
                <input type="text" id="livro" name="livro"><br><br>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            <p> 
                <a href="ler.php" class="btn btn-primary">Ler Registros</a>

            </p>
            <p> 
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>

            </p>

        </form>
    </div>    
</body>
</html>