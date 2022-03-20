<?php
include_once './conexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Listar </title>

</head>

<body>
    

<br><br><hr></hr>

    <?php



$query_contatos = "SELECT nome, sobre_nome, data_nascimento, email From contatos";
$result_contatos = $conn->prepare($query_contatos);
$result_contatos->execute();

if (($result_contatos) and ($result_contatos->rowCount() != 0)) {
    while ($row_contatos = $result_contatos->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_contatos);
        extract($row_contatos);
        echo "nome: $nome <br>";
        echo "sobre_nome: $sobre_nome <br>";
        echo "data_nascimento: $data_nascimento <br>";
        echo "email: $email <br>";

        echo "<a href='cadastrar.php?nome=$nome'>Cadastrar</a><br>";
        echo "<a href='atualizar.php?nome=$nome'>Atualizar</a><br>";
        echo "<a href='deletar.php?nome=$nome'>Deletar</a><br>";

        echo "<hr>";
    }

}
else {
    echo "<p style='color: #f00;'>Erro: Usuario nao cadastrado com sucesso!</p>";
}
?>

</body>
</html>








