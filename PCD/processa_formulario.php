<?php
$servername = "srv1078.hstgr.io"; 
$username = "u492577848_protocolo";
$password = "WRVGAxCbrJ8wdM$"; 
$dbname = "u492577848_demutran";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_solicitacao = $_POST['tipo_solicitacao'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;

    $upload_dir = 'midia/';
    $base_url = "https://demutran.protocolosead.com/Defesa/";

    $doc_requerimento_url = uploadFile('doc_requerimento', $upload_dir, $base_url);
    $cnh_url = uploadFile('cnh', $upload_dir, $base_url);
    $cnh_condutor_url = uploadFile('cnh_condutor', $upload_dir, $base_url);
    $notif_demutran_url = uploadFile('notif_DEMUTRAN', $upload_dir, $base_url);
    $crlv_url = uploadFile('crlv', $upload_dir, $base_url);
    $comprovante_residencia_url = uploadFile('comprovante_residencia', $upload_dir, $base_url);
    $doc_complementares_urls = uploadMultipleFiles('doc_complementares', $upload_dir, $base_url);

    $sql = "INSERT INTO solicitacao_demutran (tipo_solicitacao, nome, telefone, email, assunto, descricao, doc_requerimento_url, cnh_url, cnh_condutor_url, notif_demutran_url, crlv_url, comprovante_residencia_url, doc_complementares_urls) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $tipo_solicitacao, $nome, $telefone, $email, $assunto, $descricao, $doc_requerimento_url, $cnh_url, $cnh_condutor_url, $notif_demutran_url, $crlv_url, $comprovante_residencia_url, $doc_complementares_urls); 

    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();

function uploadFile($file_key, $upload_dir, $base_url) {
    if (isset($_FILES[$file_key]) && $_FILES[$file_key]['error'] === UPLOAD_ERR_OK) {
        $file_name = basename($_FILES[$file_key]['name']);
        $target_path = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES[$file_key]['tmp_name'], $target_path)) {
            return $base_url . $target_path;
        }
    }
    return null;
}

function uploadMultipleFiles($file_key, $upload_dir, $base_url) {
    $urls = [];
    if (isset($_FILES[$file_key])) {
        foreach ($_FILES[$file_key]['tmp_name'] as $key => $tmp_name) {
            if ($_FILES[$file_key]['error'][$key] === UPLOAD_ERR_OK) {
                $file_name = basename($_FILES[$file_key]['name'][$key]);
                $target_path = $upload_dir . $file_name;
                if (move_uploaded_file($tmp_name, $target_path)) {
                    $urls[] = $base_url . $target_path;
                }
            }
        }
    }
    return implode(',', $urls);
}
?>
