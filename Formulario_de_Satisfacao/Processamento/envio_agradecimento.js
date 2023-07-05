<script>
   // Manipular o envio do formulário
   document.getElementById("pesquisaForm").addEventListener("submit", function(event) {
      // Prevenir o envio padrão do formulário
      event.preventDefault();
      
      // Redirecionar para a página de agradecimento
      window.location.href = "./Agradecimento/agradecimento.html";
   });
</script>