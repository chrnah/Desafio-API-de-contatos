<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>
        <h1>Cadastro</h1>
        <?php
//Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Verificar se o usuário clicou no botão
if (!empty($dados['CadUsuario'])) {
    var_dump($dados);
    $empty_input = false;

    $dados = array_map('trim', $dados);
    if (in_array("", $dados)) {
        $empty_input = true;
        echo "<p style='color: #f00;'>Erro: Necessario preencher todos os campos!</p>";
    }




    if (!$empty_input) {
        $query_contatos = "INSERT INTO contatos (nome, sobre_nome, data_nascimento, telefone, celular, email) VALUES (:nome, :sobre_nome, :data_nascimento, :telefone, :celular, :email) ";
        $cad_contatos = $conn->prepare($query_contatos);
        $cad_contatos->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $cad_contatos->bindParam(':sobre_nome', $dados['sobre_nome'], PDO::PARAM_STR);
        $cad_contatos->bindParam(':data_nascimento', $dados['data_nascimento'], PDO::PARAM_INT);
        $cad_contatos->bindParam(':telefone', $dados['telefone'], PDO::PARAM_INT);
        $cad_contatos->bindParam(':celular', $dados['celular'], PDO::PARAM_INT);
        $cad_contatos->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $cad_contatos->execute();
        if ($cad_contatos->rowCount()) {
            echo "<p style='color: green;'>Usuario cadastrado com sucesso!<br>";
        }
        else {
            echo "<p style='color: #ff00;'>Erro: Usuario nao cadastrado com sucesso!<br>";
        }
    }


}


?>


   


        <form name="cad-usuario" method="POST" action="">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="nome" value="<?php
if (isset($dados['nome'])) {
    echo $dados['nome'];
}
?>"><br><br>

            <label>Sobre Nome: </label>
            <input type="sobre_nome" name="sobre_nome" id="sobre_nome" placeholder="segundo nome" value="<?php
if (isset($dados['sobre-nome'])) {
    echo $dados['sobre_nome'];
}
?>"><br><br>

<label>Data Nascimento: </label>
            <input type="data_nascimento" name="data_nascimento" id="data_nascimento" placeholder="dia.mes.ano" value="<?php
if (isset($dados['data_nascimento'])) {
    echo $dados['data_nascimento'];
}
?>"><br><br>

<label>Telefone: </label>
            <input type="telefone" name="telefone" id="telefone" placeholder="tel" value="<?php
if (isset($dados['telefone'])) {
    echo $dados['telefone'];
}
?>"><br><br>

<label>Celular: </label>
            <input type="celular" name="celular" id="celular" placeholder="cel" value="<?php
if (isset($dados['celular'])) {
    echo $dados['celular'];
}
?>"><br><br>

<label>Email: </label>
            <input type="email" name="email" id="email" placeholder="email" value="<?php
if (isset($dados['email'])) {
    echo $dados['email'];
}
?>"><br><br>

            <input type="submit" value="Cadastrar" name="CadUsuario">
           
        </form>

        
    </body>
</html>
