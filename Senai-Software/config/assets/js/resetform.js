//este arquivo contém uma função (limparFormulario) que deveria - deveria - apagar os dados do formulário ao clicar no botão "LIMPAR", entretanto, só funcionou após eu inserir o script no próprio HTML.
function limparFormulario() {
  document.getElementById("forms").reset();

  // Limpar manualmente os campos de texto
  var inputs = document.querySelectorAll('#forms input[type="text"]');
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].value = '';
  }
}