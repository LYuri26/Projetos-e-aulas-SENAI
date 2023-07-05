function limparFormulario() {
  document.getElementById("forms").reset();

  // Limpar manualmente os campos de texto
  var dados = document.querySelectorAll('#forms input[type="text"]');
  for (var i = 0; i < dados.length; i++) {
    dados[i].value = "";
  }
}
function togglePasswordVisibility(inputId, toggleIconId) {
  var senhaInput = document.getElementById(inputId);
  var toggleIcon = document.getElementById(toggleIconId);
  if (senhaInput.type === "password") {
    senhaInput.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    senhaInput.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}
