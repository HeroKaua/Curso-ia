document.addEventListener('DOMContentLoaded', function() {
    // Configuração da variável para a chave correta
    const correctKey = '6f8bbd14-4a74-984c-323e7efa6ecd';

    // Função para validar a chave
    function validateKey(inputKey) {
        return inputKey === correctKey;
    }

    // Manipulador de evento para o formulário de pagamento
    document.getElementById('payment-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Obtém a chave inserida pelo usuário
        const keyInput = document.getElementById('key').value.trim();

        // Valida a chave
        if (validateKey(keyInput)) {
            // Se a chave estiver correta, mostra o conteúdo do curso
            document.getElementById('course-content').classList.remove('hidden');
            alert('Curso desbloqueado com sucesso!');
        } else {
            // Se a chave estiver incorreta, exibe uma mensagem de erro
            alert('Chave inválida. Por favor, verifique e tente novamente.');
        }
    });
});
