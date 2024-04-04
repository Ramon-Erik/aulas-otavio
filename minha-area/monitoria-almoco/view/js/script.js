const resetBtn = document.querySelector('input[type="reset"]')
const labelBtns = document.querySelectorAll('label')
const radioInputs = document.querySelectorAll('input[type="radio"]');
let valorSelecionado = null; // Inicializa a variável com null

radioInputs.forEach(input => {
    input.addEventListener('change', () => {
        if (input.checked) {
            valorSelecionado = input.value;
        }
    });
});


labelBtns.forEach(label => {
    label.addEventListener('click', () => {
        // Redefinir o tamanho da fonte de todas as labels para o tamanho original
        labelBtns.forEach(otherLabel => {
            otherLabel.style.fontSize = '3rem';
        });

        // Definir o tamanho da fonte da label clicada para ser maior
        label.style.fontSize = '4rem';
    });
});

resetBtn.addEventListener('click', () => {
    labelBtns.forEach(otherLabel => {
        otherLabel.style.fontSize = '3rem';
    });
})