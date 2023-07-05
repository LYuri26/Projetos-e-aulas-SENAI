<?php
// Incluir o arquivo com as novas tabelas
require_once '/home/lenon/Documentos/Agenda Biblioteca/Tabelas/novastabelas.php';

// Definir as informações de conexão
$host = 'localhost'; // endereço do servidor de banco de dados
$dbname = 'Agendamento'; // nome do banco de dados
$user = 'root'; // nome do usuário do banco de dados
$pass = ''; // senha do usuário do banco de dados

// Conectar ao banco de dados usando PDO
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
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

// Validar as entradas
$errors = array();

// Validar o horário de agendamento
if ($hora_inicio < '08:00' || $hora_termino > '21:00' || $hora_inicio > $hora_termino) {
  $errors[] = "O horário de agendamento deve estar entre as 08:00 e 21:00 e o horário de término deve ser posterior ao de início.";
}

// Validar a data de agendamento
$timestamp = strtotime($data);
if (date('N', $timestamp) >= 6 || in_array(date('Y-m-d', $timestamp), array('2023-06-15'))) {
  $errors[] = "Não é permitido agendamento aos sábados, domingos e feriados.";
}

// Validar se a data de agendamento está dentro do ano vigente (de janeiro a dezembro)
$ano_atual = date('Y');
$ano_agendamento = date('Y', $timestamp);
if ($ano_agendamento !== $ano_atual) {
  $errors[] = "A data de agendamento deve estar dentro do ano vigente.";
}

// Validar o nome
if (trim($nome) === '') {
  $errors[] = "O nome deve ser preenchido.";
}

// Validar se o nome contém somente letras e espaços
if (!preg_match('/^[a-zA-Z\s]+$/', $nome)) {
  $errors[] = "O nome não pode conter números ou caracteres especiais.";
} 

// Exibir mensagens de erro, se houver
if (!empty($errors)) {
  echo "Erro ao agendar: <br>";
  foreach ($errors as $error) {
    echo "- $error <br>";
  }
} else {
  // Verificar se já existe um agendamento para essa data e hora
  $stmt = $pdo->prepare("
    SELECT COUNT(*) FROM $nome_agendamentos
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
    // Inserir os dados no banco de dados se não houver nenhum conflito de horário
    $stmt = $pdo->prepare("
    INSERT INTO $nome_agendamentos (nome, data, hora_inicio, hora_termino, quantidade_alunos, curso)
    VALUES (:nome, :data, :hora_inicio, :hora_termino, :quantidade_alunos, :curso)
    ");
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':data', $data);
    $stmt->bindValue(':hora_inicio', $hora_inicio);
    $stmt->bindValue(':hora_termino', $hora_termino);
    $stmt->bindValue(':quantidade_alunos', $quantidade_alunos);
    $stmt->bindValue(':curso', $curso);
    $stmt->execute();
    // Exibir uma mensagem de sucesso se o agendamento foi feito com sucesso
    echo "Agendamento realizado com sucesso!";
  }
}


}
} catch (PDOException $e) {
// Exibir uma mensagem de erro se ocorrer um erro na conexão com o banco de dados
echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
} finally {
// Fechar a conexão com o banco de dados
$pdo = null;
}
?>
