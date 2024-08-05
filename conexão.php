<?php
$servername = "crookedly-cordial-manta.data-1.use1.tembo.io";
$username = "postgres";
$password = "47Saw1MMqccRom5x";
$dbname = "nome_do_banco_de_dados";
$port = 5432; // Especifique a porta aqui

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";

// Fechar a conexão
//$conn->close();
?>
