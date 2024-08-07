document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const cpfInput = document.getElementById('cpf').value.trim();
    const amountInput = parseFloat(document.getElementById('amount').value);

    // CPF e valor esperados
    const expectedCpf = '127.726.329-97';
    const expectedAmount = 29.99;

    if (cpfInput === expectedCpf && amountInput === expectedAmount) {
        document.getElementById('course-content').classList.remove('hidden');
        document.getElementById('payment-form').reset();
        alert('Curso desbloqueado com sucesso! Você pode acessar o grupo no WhatsApp abaixo.');
    } else {
        alert('Pagamento não identificado ou valor incorreto. Verifique o CPF e o valor e tente novamente.');
    }
});
