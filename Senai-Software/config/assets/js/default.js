/*const urlParams = new URLSearchParams(window.location.search);
const erroParam = urlParams.get('error');

if (erroParam === '1001') {
  document.title = 'Login'; // Alterar o título da página
  //window.location.href = 'index.php';
  var msgErro = document.getElementById('falseMsg');
  msgErro.textContent = 'Usuário ou senha inválidos';
  msgErro.classList.add('erro'); // Adicionar a classe 'erro' ao elemento
  msgErro.style.visibility = 'visible'; // Exibir o elemento
  msgErro.style.display = 'block'; // Exibir o elemento
  history.replaceState(null, null, 'index.php'); // Redirecionar para a página inicial
}
*/
var urlParams = new URLSearchParams(window.location.search);
var erroParam = urlParams.get('error');

if (erroParam === '1001') {
  document.title = 'Login'; // Alterar o título da página
  //window.location.href = 'index.php';
  var msgErro = document.getElementById('falseMsg');
  msgErro.textContent = 'Usuário ou senha inválidos';
  msgErro.classList.add('erro'); // Adicionar a classe 'erro' ao elemento
  msgErro.style.visibility = 'visible'; // Exibir o elemento
  msgErro.style.display = 'block'; // Exibir o elemento
  history.replaceState(null, 'Login', 'index.php'); // Redirecionar para a página inicial sem nova requisição
  //window.location.replace('index.php'); // O window location também redireciona para a página inicial, no entanto, ele também atualiza a página, diferentemente do replaceState, que apenas restaura um estado anterior da página
};

var urlParams1 = new URLSearchParams(window.location.search);
var skip_message = urlParams1.get('skip_message');

if (skip_message === '1') {
  document.title = 'Cancelar'; // Alterar o título da página
  window.location.href = 'cancelar.php?skip_message=1';
  history.replaceState(null, 'Cancelar', 'cancelar.php?skip_message=1'); // Redirecionar para a página inicial
};

