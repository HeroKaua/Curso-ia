<?php
session_start();
if (!isset($_SESSION['payment_valid']) || !$_SESSION['payment_valid']) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
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
        <h2>Pagamento Confirmado!</h2>
        <p>Você agora tem acesso ao curso completo de IA.</p>
        <a href="https://chat.whatsapp.com/G7yFe1nuXVN7vdjKgJWlqb" target="_blank" class="btn">Acesse o Grupo no WhatsApp</a>
    </main>
    <footer>
        <p>© Todos os direitos reservados a Kauã Camargo Ribeiro</p>
    </footer>
</body>
</html>
