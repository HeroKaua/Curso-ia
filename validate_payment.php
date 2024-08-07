<?php
session_start();

// Caminho para o diretório onde serão armazenados os comprovantes
$uploadDirectory = 'uploads/';

// Garante que o diretório de uploads existe
if (!is_dir($uploadDirectory)) {
    mkdir($uploadDirectory, 0777, true);
}

// Verifica se um arquivo foi enviado
if (isset($_FILES['receipt'])) {
    $file = $_FILES['receipt'];
    
    // Checa se o upload foi bem-sucedido
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Gera um nome único para o arquivo
        $fileName = uniqid() . '-' . basename($file['name']);
        $filePath = $uploadDirectory . $fileName;
        
        // Move o arquivo para o diretório de uploads
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            // Simula a verificação do comprovante
            if (validatePayment($filePath)) {
                $_SESSION['payment_valid'] = true;
                header("Location: success.php");
                exit();
            } else {
                $_SESSION['payment_valid'] = false;
                header("Location: failure.php");
                exit();
            }
        } else {
            echo 'Erro ao enviar o comprovante. Por favor, tente novamente.';
        }
    } else {
        echo 'Nenhum arquivo foi enviado ou ocorreu um erro durante o upload.';
    }
} else {
    echo 'Nenhum arquivo foi enviado.';
}

// Função fictícia para validar o pagamento
function validatePayment($filePath) {
    // Simula a extração e validação do valor do comprovante
    $paymentAmount = 29.99; // Valor esperado do pagamento
    
    // Aqui você pode adicionar a lógica para verificar o valor no arquivo. Esta é uma simulação.
    // Exemplo de como você poderia validar com um valor fixo:
    return true; // Simula que o pagamento foi validado com sucesso
}
?>
