<?php
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
            $isPaymentValid = validatePayment($filePath);

            if ($isPaymentValid) {
                echo '<!DOCTYPE html>
                <html lang="pt-BR">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Pagamento Confirmado - KauãSites</title>
                    <link rel="stylesheet" href="styles.css">
                </head>
                <body>
                    <header>
                        <div class="logo">KauãSites</div>
                    </header>
                    <main>
                        <h2>Curso Desbloqueado!</h2>
                        <p>Você agora tem acesso ao curso completo de IA.</p>
                        <a href="https://chat.whatsapp.com/G7yFe1nuXVN7vdjKgJWlqb" target="_blank" class="btn">Acesse o Grupo no WhatsApp</a>
                    </main>
                    <footer>
                        <p>© Todos os direitos reservados a Kauã Camargo Ribeiro</p>
                    </footer>
                </body>
                </html>';
            } else {
                echo 'Comprovante não é válido ou valor incorreto. Por favor, verifique o comprovante e tente novamente.';
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
    // Em um ambiente real, você precisaria processar o arquivo e verificar se o valor corresponde a R$ 29,99

    // Simulação de extração de valor do comprovante
    // Para uma implementação real, você precisaria de uma solução de OCR ou uma API de reconhecimento para ler o valor do arquivo
    $paymentAmount = 29.99; // Valor esperado do pagamento
    
    // Aqui você pode adicionar a lógica para verificar o valor no arquivo. Esta é uma simulação.
    // Exemplo de como você poderia validar com um valor fixo:
    return true; // Simula que o pagamento foi validado com sucesso
}
?>
