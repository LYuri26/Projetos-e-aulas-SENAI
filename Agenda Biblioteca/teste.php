<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Agendamento de Aula</title>
  <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Agendamento de Biblioteca</title>
</head>
<body>
  <h1>Agendamento de Aula</h1>

  <form method="POST">
    <label for="instrutor">Instrutor:</label>
    <input type="text" id="instrutor" name="instrutor" required><br><br>

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" id="sobrenome" name="sobrenome" required><br><br>


    <label for="curso">Curso:</label>
    <input type="text" id="curso" name="curso" required><br><br>

    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required><br><br>

    <label for="hora_inicio">Hora de Início:</label>
    <input type="time" id="hora_inicio" name="hora_inicio" required><br><br>

    <label for="hora_termino">Hora de Término:</label>
    <input type="time" id="hora_termino" name="hora_termino" required><br><br>

    <label for="qtd_alunos">Quantidade de Alunos:</label>
    <input type="number" id="qtd_alunos" name="qtd_alunos" required><br><br>

    <input type="submit" value="Agendar">
  </form>

  <?php
  // Tenta criar uma conexão com o banco de dados
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=Agendamento', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
  }

  // Se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $instrutor = $_POST['instrutor'];
    $sobrenome = $_POST['sobrenome'];
    $curso = $_POST['curso'];
    $data = $_POST['data'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_termino = $_POST['hora_termino'];
    $qtd_alunos = $_POST['qtd_alunos'];

    // Insere os dados na tabela "agendamentos"
    $stmt = $pdo->prepare("INSERT INTO agendamentos (nome, sobrenome, data, hora_inicio, hora_termino, quantidade_alunos, curso) VALUES (?,?, ?, ?, ?, ?, ?)");
    $stmt->execute([$instrutor, $sobrenome, $data, $hora_inicio, $hora_termino, $qtd_alunos, $curso]);

    // Exibe uma mensagem de sucesso
    echo "<p>Agendamento realizado com sucesso!</p>";
  }
  ?>

</body>
</html>