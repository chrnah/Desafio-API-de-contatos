<?php
$servername = "localhost";
$database = "projeto";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexao falhou: " . mysqli_connect_error());
}
echo "Conectado com sucesso";
mysqli_close($conn);
?>
