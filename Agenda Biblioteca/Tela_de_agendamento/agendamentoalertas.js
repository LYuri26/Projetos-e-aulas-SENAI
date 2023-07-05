function exibirAlerta(event) {
  event.preventDefault(); // impede que o formulário seja enviado antes do alerta

  if (document.getElementById("concordo").checked) {
    // exibe mensagem de alerta se o checkbox foi marcado
    alert("O instrutor concorda e está ciente de que em caso de cancelamento ou não comparecimento ele irá na aba cancelamento do site com antecedencia.");

    // envia o formulário se o checkbox foi marcado
    document.forms[0].submit();
  } else {
    // exibe mensagem de erro se o checkbox não foi marcado
    alert("Você precisa concordar para continuar.");
  }
}
