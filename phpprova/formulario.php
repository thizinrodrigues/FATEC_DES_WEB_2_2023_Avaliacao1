<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<?php


print_r($_POST);
$filename = "log.txt";
if(!file_exists("log.txt")){
    $handle = fopen("log.txt", "w"); 
} else {
    $handle = fopen("log.txt", "a");
}

fwrite($handle, $_POST['nome']);
fwrite($handle, "\n");
fwrite($handle, $_POST['data']);
fwrite($handle, "\n");
fwrite($handle, $_POST['livro']);
fwrite($handle, "\n");
fwrite($handle, "\n");
fflush($handle);
fclose($handle);
?>
</body>
<p> 
        <a href="verifica.php" class="btn btn-danger">Return</a>
    </p>
</html>