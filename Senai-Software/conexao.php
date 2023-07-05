<?php
/* 
! IMPORTANTE !
! IMPORTANTE !

SE NAO ESTOU ENGANDO, PODE HAVER A POSSIBILIDADE DE EXCLUSÃO DESTE ARQUIVO (conexao.php) POIS O MESMO JÁ NÃO CUMPRE MAIS A FUNÇÃO DESIGNADA, MAS POR ENQUANTO VAMOS MANTÊ-LO

! IMPORTANTE !
! IMPORTANTE !
*/
require_once './session.php';

// Verificar se há uma sessão de usuário ou superusuário 
if (!(isset($_SESSION['usuario']) || isset($_SESSION['superusuario']))) {
  // Redirecionar para a página de login 
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <!-- link tags -->
  <link rel="stylesheet" href="./config/assets/estilos/consulta.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Fira+Sans:ital,wght@1,200&family=Montserrat:wght@200&family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  // Definir as informações de conexão
  $host = '127.0.0.1';
  $dbname = 'u683147803_HWpf5';
  $username = 'u683147803_RLvSS';
  $password = 'Senai123';

  try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Configurar o modo de erro para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // Se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Obtém os dados do formulário
      $nome = $_POST['nome'];
      $id = $_POST['id'];
      $motivo = $_POST['motivo'];

      // Insere os dados na tabela "cancelamentos"
      $stmt = $pdo->prepare("INSERT INTO cancelamentos (id, nome, motivo) VALUES (:id, :nome, :motivo)");
      $stmt->bindValue(':id', $id);
      $stmt->bindValue(':nome', $nome);
      $stmt->bindValue(':motivo', $motivo);
      $stmt->execute();
      //echo "<p>Cancelamento realizado com sucesso!</p>";
    }
  } catch (PDOException $e) { // Exibir uma mensagem de erro
    echo "Erro de conexão: " . $e->getMessage();
  }
  ?>
  <p>Agendamento realizado com sucesso!</p>
  <script src="./config/assets/js/destruirSessao.js"></script>
</body>

</html>