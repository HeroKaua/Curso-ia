document.addEventListener('DOMContentLoaded', function() {
    // Gerar QR Code
    const qr = new QRious({
        element: document.getElementById('qr-code'),
        value: 'PIX_KEY:6f8bbd14-4a74-984c-323e7efa6ecd|AMOUNT:29.99', // Formato que pode ser lido pelo seu sistema de pagamento
        size: 250
    });
    
    document.getElementById('payment-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const keyInput = document.getElementById('key').value.trim();
        const expectedKey = '6f8bbd14-4a74-984c-323e7efa6ecd';

        if (keyInput === expectedKey) {
            document.getElementById('course-content').classList.remove('hidden');
            document.getElementById('payment-form').reset();
            alert('Curso desbloqueado com sucesso! Você pode acessar o grupo no WhatsApp abaixo.');
        } else {
            alert('Chave incorreta. Verifique a chave e tente novamente.');
        }
    });
});
