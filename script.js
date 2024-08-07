document.addEventListener('DOMContentLoaded', function() {
    // Manipulador de evento para o formulário de pagamento
    document.getElementById('payment-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Obtém a chave inserida pelo usuário
        const keyInput = document.getElementById('key').value.trim();

        // Envia a chave para o servidor para validação
        fetch('validate_payment.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                key: keyInput
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Se a chave estiver correta, mostra o conteúdo do curso
                document.getElementById('course-content').classList.remove('hidden');
                alert(data.message);
            } else {
                // Se a chave estiver incorreta, exibe uma mensagem de erro
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Houve um erro ao processar seu pagamento. Tente novamente mais tarde.');
        });
    });
});
