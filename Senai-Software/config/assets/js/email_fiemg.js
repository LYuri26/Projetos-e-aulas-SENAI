// Função para validar o email
function validarEmail() {
    var campoEmail = document.getElementById("email"); // Obtém o campo de entrada de email
    var email = campoEmail.value; // Obtém o valor do campo de entrada de email
    var fiemg_dom = /^.+@fiemg\.com\.br$/;
    var mensagemErro = document.getElementById("emailErro"); // mensagem de erro

    if (fiemg_dom.test(email)) {
        console.log('Email válido');
    } else {
        console.log('Email inválido');
        mensagemErro.textContent = 'O email precisa conter o domínio @fiemg.com.br'; // Define a mensagem de erro
        mensagemErro.style.display = 'flex'; // Exibe a mensagem de erro
        mensagemErro.style.margin = '1rem' // Define a cor da mensagem de erro
        var form = document.getElementById("forms");
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Previne o envio do formulário
        });
    }
}

// Exemplo de uso: associando a função ao evento de envio do formulário
var form = document.getElementById("forms");
form.addEventListener("submit", function (event) {
    validarEmail();
});
