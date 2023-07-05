<?php
// Definir as informações de conexão
$host = 'localhost';
$dbname = 'Agendamento';
$username = 'root';
$password = '';

// Conectar ao banco de dados usando PDO
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  // Configurar o modo de erro para exceções
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Verificar se o formulário foi submetido
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar os valores dos parâmetros
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_termino = $_POST['hora_termino'];
    $quantidade_alunos = $_POST['quantidade_alunos'];
    $curso = $_POST['curso'];

    // Verificar se já existe um agendamento para essa data e hora
    $stmt = $pdo->prepare("
      SELECT COUNT(*) FROM agendamentos
      WHERE data = :data AND (
        (hora_inicio <= :hora_inicio AND hora_termino > :hora_inicio) OR
        (hora_inicio < :hora_termino AND hora_termino >= :hora_termino)
      )
    ");
    $stmt->bindValue(':data', $data);
    $stmt->bindValue(':hora_inicio', $hora_inicio);
    $stmt->bindValue(':hora_termino', $hora_termino);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
      // Exibir uma mensagem de erro se já existe um agendamento para essa data e hora
      echo "Já existe um agendamento para esse dia e horário.";
    } else {
      // Inserir os dados no banco de dados se não houver conflito de horários
      $stmt = $pdo->prepare("
        INSERT INTO agendamentos (nome, data, hora_inicio, hora_termino, quantidade_alunos, curso)
        VALUES (:nome, :data, :hora_inicio, :hora_termino, :quantidade_alunos, :curso)
      ");
      
      // Passar os valores dos parâmetros para a instrução SQL
      $stmt->bindValue(':nome', $nome);
      $stmt->bindValue(':data', $data);
      $stmt->bindValue(':hora_inicio', $hora_inicio);
      $stmt->bindValue(':hora_termino', $hora_termino);
      $stmt->bindValue(':quantidade_alunos', $quantidade_alunos);
      $stmt->bindValue(':curso', $curso);

      // Executar a instrução SQL para inserir os dados no banco de dados
      $stmt->execute();

      // Exibir uma mensagem de sucesso
      echo "Os dados foram inseridos com sucesso!";
    }
    
    // ...
  }
} catch(PDOException $e) {
  // Exibir uma mensagem de erro
  echo "Erro de conexão: " . $e->getMessage();
}
