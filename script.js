document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const keyInput = document.getElementById('key').value.trim();
    const amountInput = parseFloat(document.getElementById('amount').value);

    // Chave e valor esperados
    const expectedKey = '6f8bbd14-4a74-984c-323e7efa6ecd';
    const expectedAmount = 29.99;

    if (keyInput === expectedKey && amountInput === expectedAmount) {
        document.getElementById('course-content').classList.remove('hidden');
        document.getElementById('payment-form').reset();
        alert('Curso desbloqueado com sucesso! Você pode acessar o grupo no WhatsApp abaixo.');
    } else {
        alert('Pagamento não identificado ou valor incorreto. Verifique a chave e o valor e tente novamente.');
    }
});
