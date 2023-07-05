// Manipulação do formulário
var form = document.getElementById('pesquisaForm');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Impede o envio padrão do formulário

  // Aqui, você pode realizar outras operações, como enviar os dados do formulário para um servidor usando Ajax, armazenar no banco de dados, etc.

  // Redirecionamento para a página de agradecimento
  window.location.href = './Agradecimento/agradecimento.html';
});
