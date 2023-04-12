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
    <title>Ler Registros</title>
</head>
<body>
<?php
print_r($_POST);
$filename = "log.txt";
$handle = fopen("log.txt", "r");
echo '<br><br>';
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);


?>
</body>
<p> 
        <a href="verifica.php" class="btn btn-danger">Return</a>
    </p>
</html>