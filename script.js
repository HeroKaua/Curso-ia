document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const cpfInput = document.getElementById('cpf').value;
    if (cpfInput === '127.726.329-97') {
        document.getElementById('course-content').classList.remove('hidden');
        alert('Curso desbloqueado com sucesso!');
    } else {
        alert('Pagamento não identificado. Por favor, verifique o CPF e tente novamente.');
    }
});
