// Função para criar as tabelas no banco de dados
function criarTabelas() {
  // Cria uma instância do objeto XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Define a URL do script PHP responsável pela criação das tabelas
  var url = "./tabelas_formulario.php";

  // Configura a requisição AJAX
  xhr.open("GET", url, true);

  // Define o callback para tratar a resposta da requisição
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        // A requisição foi concluída com sucesso
        console.log("Tabelas criadas com sucesso!");
      } else {
        // Ocorreu um erro na requisição
        console.error("Erro na criação das tabelas: " + xhr.status);
      }
    }
  };

  // Envia a requisição
  xhr.send();
}

// Chama a função para criar as tabelas quando a página for carregada
window.onload = criarTabelas;
