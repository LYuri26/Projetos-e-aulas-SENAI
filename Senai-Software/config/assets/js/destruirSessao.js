/* codigo original errado

if (performance.navigation.type === 2) {
  session_start();
  session_destroy();
}*/
window.addEventListener("beforeunload", function () {
  // document.title = 'Formulário de Cadastro'; // Alterar o título da página
  // Limpar a sessão antes de recarregar a página
  // Pode ser usado duas funcoes: sessionStorage.clear() ou localStorage.clear()
  document.cookie = "";
  sessionStorage.clear(); // Limpar a sessão
  localStorage.clear(); // Limpar o armazenamento local
});
window.addEventListener("beforeunload", function () {
  var currentPage = location.pathname; // Obtém o caminho da URL

  if (currentPage === "/index.php") {
    document.title = "Login";
  } else if (currentPage === "/cadastro.html") {
    document.title = "Carregando...";
  } else if (currentPage === "/menu.php") {
    document.title = "Carregando...";
  } else if (currentPage === "/agendamentos.php") {
    document.title = "Carregando...";
  } else if (currentPage === "/agendar.php") {
    document.title = "Carregando...";
  } else if (currentPage === "/cancelamentos.php") {
    document.title = "Carregando...";
  } else if (currentPage === "./cancelar.php") {
    document.title = "Carregando...";
  }
});
window.addEventListener("load", function () {
  var currentPage1 = window.location.pathname; // Obtém o caminho da URL

  if (currentPage1 === "/index.php") {
    document.title = "Login";
  } else if (currentPage1 === "/menu.php") {
    document.title = "Menu";
  } else if (currentPage1 === "/agendamentos.php") {
    document.title = "Lista de Agendamentos";
  } else if (currentPage1 === "/agendar.php") {
    document.title = "Agendar";
  } else if (currentPage1 === "/cancelamentos.php") {
    document.title = "Lista de Cancelamentos";
  } else if (currentPage1 === "/cancelar.php") {
    document.title = "Cancelar";
  } else if (currentPage1 === "/cadastro.html") {
    document.title = "Formulário de Cadastro";
  }
});

window.addEventListener("pageshow", function (event) {
  var inputs = document.querySelectorAll("input, textarea");
  document.cookie = "";
  sessionStorage.clear(); // Limpar a sessão
  localStorage.clear(); // Limpar o armazenamento local
  inputs.forEach(function (input) {
    input.defaultValue = "";
  });
});

/*
function limparSessao() {
  // Envia uma requisição AJAX para o arquivo PHP que destruirá a sessão
  var requisicao = new XMLHttpRequest();
  var url = 'logout.php';
  var dados = 'error=1001'; // Dados adicionais no formato de string
  requisicao.open('POST', url, true);
  requisicao.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Define o cabeçalho
  requisicao.onreadystatechange = function () {
    if (requisicao.readyState === XMLHttpRequest.DONE && requisicao.status === 200) {
      document.title = 'Login'; // Alterar o título da página
      window.location.href = 'index.php?' + dados; // Redireciona para index.php com os dados adicionais
    }
  };
  
  requisicao.send(dados);
  var msgErro = document.getElementById('erroMsg');
  msgErro.textContent = 'Login ou senha inválidos.';
  document.title = 'Login'; // Alterar o título da página
}



/* nao funciona
tambem errado 
if (window.performance.persisted) {
  sessionStorage.clear(); // Limpa a sessão 
}

*/
