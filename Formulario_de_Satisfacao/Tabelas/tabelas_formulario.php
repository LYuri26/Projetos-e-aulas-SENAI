<?php

require_once '../Processamento/conexao.php';

// Verifica se a tabela já existe
$sqlCheckTable = "SHOW TABLES LIKE 'formulario'";
$stmtCheckTable = $conn->prepare($sqlCheckTable);
$stmtCheckTable->execute();

// Se a tabela já existir, exibe a mensagem correspondente
if ($stmtCheckTable->rowCount() > 0) {
  echo "A tabela já existe! <br>";
} else {
  // Criação da tabela
  $sqlCreateTable = "
  CREATE TABLE formulario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    disponibilidade_de_livros INT NOT NULL,
    ambiente_de_estudo INT NOT NULL,
    atendimento_dos_funcionarios INT NOT NULL,
    organizacao_dos_materiais INT NOT NULL,
    local_acolhedor_para_estudos INT NOT NULL,
    acesso_a_internet INT NOT NULL,
    disponibilidade_de_computadores INT NOT NULL,
    variedade_de_eventos_e_atividades INT NOT NULL,
    horario_de_funcionamento INT NOT NULL,
    disponibilidade_de_espacos INT NOT NULL,
    satisfacao_geral INT NOT NULL,
    comentario_adicional TEXT,
    data DATE
  )";

  // Executa a instrução SQL para criar a tabela
  if ($conn->exec($sqlCreateTable) !== false) {
    echo "Tabela criada com sucesso! <br>";
  } else {
    echo "Erro ao criar a tabela." . print_r($conn->errorInfo(), true) . "<br>";
  }
}

// Fecha a conexão com o banco de dados
$conn = null;
?>