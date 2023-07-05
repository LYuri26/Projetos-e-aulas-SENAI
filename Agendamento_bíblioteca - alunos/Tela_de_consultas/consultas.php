<!DOCTYPE html>
<html>
<head>
  <title>Lista de Agendamentos</title>
  <link rel="stylesheet" href="estiloconsulta.css">
</head>
<body>
  <h1>Lista de Agendamentos</h1>
  <?php 
    // Definir as informações de conexão
    $host = 'localhost';
    $dbname = 'Agendamento';
    $username = 'root';
    $password = '';

    // Conectar ao dbname de dados usando PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $opc = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    );

    try {
        $conexao = new PDO($dsn, $username, $password, $opc);
    } catch (PDOException $e) {
        die("Erro ao conectar ao dbname de dados: " . $e->getMessage());
    }

    // buscar agendamentos no dbname de dados
    $query = "SELECT * FROM agendamentos";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $agendamentos = $stmt->fetchAll();
  ?>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data</th>
        <th>Hora de Início</th>
        <th>Hora de Término</th>
        <th>Quantidade de Alunos</th>
        <th>Curso</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($agendamentos as $agendamento): ?>
        <tr>
          <td><?php echo $agendamento['id']; ?></td>
          <td><?php echo $agendamento['nome']; ?></td>
          <td><?php echo $agendamento['data']; ?></td>
          <td><?php echo $agendamento['hora_inicio']; ?></td>
          <td><?php echo $agendamento['hora_termino']; ?></td>
          <td><?php echo $agendamento['quantidade_alunos']; ?></td>
          <td><?php echo $agendamento['curso']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
