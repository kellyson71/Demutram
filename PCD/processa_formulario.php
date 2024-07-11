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
    function getPostValue($key, $default = null) {
        return isset($_POST[$key]) ? $_POST[$key] : $default;
    }

    $residente = getPostValue('residente', 0);
    $tipo_solicitacao = getPostValue('tipo_solicitacao');
    $emissao_cartao = getPostValue('emissao_cartao');
    $solicitante = getPostValue('solicitante');
    $nome = getPostValue('nome');
    $data_nascimento = getPostValue('data_nascimento');
    $cpf = getPostValue('cpf');
    $endereco = getPostValue('endereco');
    $telefone = getPostValue('telefone');
    $doc_identidade_num = getPostValue('doc_identidade_num');
    $email = getPostValue('email');

    $upload_dir = 'midia/';
    $base_url = "https://demutran.protocolosead.com/Cartao/";

    $doc_identidade_url = uploadFile('doc_identidade', $upload_dir, $base_url);
    $comprovante_residencia_url = uploadFile('comprovante_residencia', $upload_dir, $base_url);
    $doc_complementares_urls = uploadMultipleFiles('doc_complementares', $upload_dir, $base_url);

    $sql = "INSERT INTO solicitacao_cartao (residente, tipo_solicitacao, emissao_cartao, solicitante, nome, data_nascimento, cpf, endereco, telefone, doc_identidade_num, email, doc_identidade_url, comprovante_residencia_url, laudo_medico_url, representante_legal, nome_representante, cpf_representante, endereco_representante, telefone_representante, email_representante, doc_identidade_representante_url, proc_comprovante_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Erro na preparação da declaração: " . $conn->error);
    }

    $stmt->bind_param("issssssssssssssissssss",
        $residente,
        $tipo_solicitacao,
        $emissao_cartao,
        $solicitante,
        $nome,
        $data_nascimento,
        $cpf,
        $endereco,
        $telefone,
        $doc_identidade_num,
        $email,
        $doc_identidade_url,
        $comprovante_residencia_url,
        $laudo_medico_url,
        $representante_legal,
        $nome_representante,
        $cpf_representante,
        $endereco_representante,
        $telefone_representante,
        $email_representante,
        $doc_identidade_representante_url,
        $proc_comprovante_url
    );

    try {
        if ($stmt->execute()) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro na execução: " . $stmt->error;
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
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
?>
