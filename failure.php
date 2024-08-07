<?php
session_start();
if (!isset($_SESSION['payment_valid']) || $_SESSION['payment_valid']) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falha na Validação - KauãSites</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">KauãSites</div>
    </header>
    <main>
        <h2>Falha na Validação do Pagamento</h2>
        <p>O comprovante enviado não é válido ou o valor está incorreto. Por favor, verifique o comprovante e tente novamente.</p>
        <a href="upload_receipt.html" class="btn">Tentar Novamente</a>
    </main>
    <footer>
        <p>© Todos os direitos reservados a Kauã Camargo Ribeiro</p>
    </footer>
</body>
</html>
