<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Listar</title>
</head>
<body>
        <a href="cadastrar.php">Cadastrar</a><br>
		<a href="listar.php">Listar</a><br>
    <h1>Listar</h1>
    <?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

$sql = "SELECT * FROM contatos ORDER BY id DESC";
$result = $conexao->query($sql);
print_r($result);



?>
    </body>
    </html>
