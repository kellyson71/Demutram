<?php
// Conexão com o banco de dados
$servername = "srv1078.hstgr.io";
$username = "u492577848_protocolo";
$password = "WRVGAxCbrJ8wdM$";
$dbname = "u492577848_demutran";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Preparar a declaração SQL
    $stmt = $conn->prepare("INSERT INTO sac (colunanome, colunatelefone, colunaemail, colunaassunto, colunamensagem) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $telefone, $email, $assunto, $mensagem);

    // Executar a declaração
    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechar a declaração
    $stmt->close();
}

// Fechar a conexão
$conn->close();
?>
