<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$id = $_POST["id"];

include_once 'conexao.php';

$sql = "update cliente set
            nome = '" . $nome . "', email = '" . $email . "',telefone = '" . $tel . "'
            where idcliente = " . $id;

if (mysql_query($sql, $con)) {
    $msg = "Atualizado com sucesso!";
}
else {
    $msg = "Erro ao atualizar!";
}
mysql_close($con);

?>