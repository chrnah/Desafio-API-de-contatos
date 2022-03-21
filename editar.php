

<html>
    <head>
        <meta charset="UTF-8">
        <title> Atualizar </title>

        <?php

$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$sobre_nome = filter_input(INPUT_GET, "sobre_nome");
$data_nascimento = filter_input(INPUT_GET, "data_nascimento");
$telefone = filter_input(INPUT_GET, "telefone");
$celular = filter_input(INPUT_GET, "celular");
$email = filter_input(INPUT_GET, "email");

$link = mysqli_connect("localhost", "root", "", "projeto");


?>
        
        </head>
        <body>
            <div id="connteudo">
                <h1> Atualizar Cadastro </h1>
                <p>
                    <form action="Atualizar.php">
                        <innput type="hidden" name="id" value="<?php echo $id ?>" />
                        nome: <input type="text" name="nome" value="<?php echo $nome ?>"/> <br/>
                        sobre_nome: <input type="text" name="sobre_nome" value="<?php echo $sobre_nome ?>"/> <br/>
                        data_nascimento: <input type="text" name="data_nascimento" value="<?php echo $data_nascimento ?>"/> <br/>
                        telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>"/> <br/>
                        celular: <input type="text" name="celular" value="<?php echo $celular ?>"/> <br/>
                        email: <input type="text" name="email" value="<?php echo $email ?>"/> <br/>
</form>
</p>
</div>
        </body>

    
</html>
