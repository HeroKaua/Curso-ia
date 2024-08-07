<?php
// Define a chave correta
$correctKey = '6f8bbd14-4a74-984c-323e7efa6ecd';

// Obtém a chave enviada pelo usuário
$userKey = $_POST['key'] ?? '';

// Valida a chave
if ($userKey === $correctKey) {
    // Sucesso: pode liberar o acesso ao curso
    echo json_encode(['success' => true, 'message' => 'Curso desbloqueado com sucesso!']);
} else {
    // Falha: chave incorreta
    echo json_encode(['success' => false, 'message' => 'Chave inválida. Por favor, verifique e tente novamente.']);
}
?>
