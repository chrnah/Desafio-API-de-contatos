<?php
include './connection.php';

$conn = getConnection();

$sql = 'INSERT INTO cadastro (nome,sobre_nome,nascimento,telefone,celular,email) VALUES (?,?,?,?,?,?,?)';

$nome = 'christian';
$sobre_nome = 'silva';
$nascimento = '18_07_1994';
$telefone = '34621681';
$celular = '964320166';
$email = 'chrhurley@hotmail.com';

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $sobre_nome);
$stmt->bindParam(3, $nascimento);
$stmt->bindParam(4, $telefone);
$stmt->bindParam(5, $celular);
$stmt->bindParam(6, $email);

if ($stmt->execute()) {
    echo 'SALVO COM SUCESSO!';
}
else {
    echo 'Erro ao SALVAR!';
}
