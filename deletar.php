<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM contatos WHERE nome,=0";

if ($conn->query($sql) === TRUE) {
    echo "deletado com sucesso";
}
else {
    echo "Erro ao deletar " . $conn->error;
}

$conn->close();
?>
