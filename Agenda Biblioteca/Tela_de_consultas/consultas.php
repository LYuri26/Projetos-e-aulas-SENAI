<!DOCTYPE html>
<html>
<head>
  <title>Lista de Agendamentos</title>
  <!-- Inclusão do arquivo de estilo -->
  <link rel="stylesheet" href="estiloconsulta.css">
</head>
<body>
  <!-- Título da página -->
  <h1>Lista de Agendamentos</h1>

  <!-- Formulário de pesquisa -->
  <form method="get" class="pesquisa-form">
    <label for="pesquisa">Pesquisar:</label>
    <input type="text" id="pesquisa" name="q" class="pesquisa-input">
    <input type="submit" value="Buscar" class="pesquisa-botao">
  </form>


  <?php 
    // Incluir o arquivo com as novas tabelas
    require_once '/home/lenon/Documentos/Agenda Biblioteca/Tabelas/novastabelas.php';

    // Definir as informações de conexão
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'Agendamento';

    // Conectar ao banco de dados usando PDO
    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch (PDOException $e) {
      die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }

    // Verificar se foi enviada uma consulta de pesquisa
    $where = '';
    if (isset($_GET['q'])) {
      $q = $_GET['q'];
      $where = "WHERE id LIKE '%$q%' OR nome LIKE '%$q%' OR data LIKE '%$q%'";
    }

    // buscar agendamentos no banco de dados
    $query = "SELECT * FROM $nome_agendamentos $where ORDER BY id DESC";
    $stmt = $pdo->query($query);

    // Armazenar os agendamentos em um array associativo
    $agendamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <!-- Tabela para exibir os agendamentos -->
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
      <!-- Loop para exibir cada agendamento em uma linha da tabela -->
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
  <?php 
    // Fechar a conexão com o banco de dados
    $pdo = null;
  ?>

  <footer>
    <p>Site desenvolvido pela turma de Desenvolvimento de Sistemas Trilhas de Futuro 2022/02 SENAI - MG Uberaba.</p>
  </footer>
  
</body>
</html>