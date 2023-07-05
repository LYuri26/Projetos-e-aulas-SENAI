function exibirAlerta(event) {
  event.preventDefault(); // impedir que o formulário seja enviado antes do alerta

  if (document.getElementById("concordo").checked) {
    alert("O instrutor concorda e está ciente de que o não comparecimento à biblioteca poderá acarretar em punições nos moldes da própria biblioteca.");
    // enviar o formulário se o checkbox foi marcado
    document.forms[0].submit();
  } else {
    // exibir mensagem de erro se o checkbox não foi marcado
    alert("Você precisa concordar para continuar.");
  }
}
