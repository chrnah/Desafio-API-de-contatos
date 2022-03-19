
<?php
$nome = $_POST["nome"];
$sobre_nome = $_POST["sobre_nome"];
$nascimento = $_POST["nascimento"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$email = $_POST["email"];

include_once './conexao.php';

$sql = "insert into cliente values(null,
            '" . $nome . "','" . $sobre_nome . "','" . $nascimento . "','" . $telefone . "','" . $celular . "','" . $email;
//echo $sql;

if (mysql_query($sql, $con)) {
    $msg = "Gravado com sucesso!";
}
else {
    $msg = "Erro ao gravar!";
}
mysql_close($con);
?>