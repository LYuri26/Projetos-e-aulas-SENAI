<?php
// Obter a data atual do computador
$ano = date("Y");

// Verificar se a tabela já existe
$nome_agendamentos = "agendamentos_" . $ano;
$nome_cancelamentos = "cancelamentos_" . $ano;

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Agendamento";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Criar tabela de agendamentos
  $sql_agendamentos = "CREATE TABLE IF NOT EXISTS $nome_agendamentos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    data DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_termino TIME NOT NULL,
    quantidade_alunos INT(11) NOT NULL,
    curso VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
  )";
  $conn->exec($sql_agendamentos);

  // Criar tabela de cancelamentos
  $sql_cancelamentos = "CREATE TABLE IF NOT EXISTS $nome_cancelamentos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_reserva INT NOT NULL,
    motivo TEXT NOT NULL
  )";
  $conn->exec($sql_cancelamentos);

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
