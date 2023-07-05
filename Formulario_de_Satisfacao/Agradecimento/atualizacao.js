// Tempo em milissegundos para redirecionar de volta para a página inicial
var tempoRedirecionamento = 3000; // 3 segundos 

setTimeout(function() {
  // Redirecionar para a página inicial
  window.location.href = '../index.php';
}, tempoRedirecionamento);
