<?php
$nome=$_POST["nome"];
$idade=$_POST["idade"];



$servername = "localhost"; // Nome do servidor, geralmente localhost
$username = "root"; // Usuário padrão do MySQL no XAMPP
$password = ""; // Senha do MySQL no XAMPP, normalmente em branco
$dbname = "psi"; // Nome do banco de dados que você criou

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);


// Checa a conexão
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";

$pergunta="Insert clientes values('".$nome."','".$idade."')";
$resultado= mysqli_query($conn, $pergunta);

?>
