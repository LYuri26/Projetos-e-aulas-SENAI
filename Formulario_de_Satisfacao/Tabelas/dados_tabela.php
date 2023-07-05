<?php
require_once '../Processamento/conexao.php';

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar os valores dos parâmetros
    $p11 = $_POST['p11'];
    $p12 = $_POST['p12'];
    $p13 = $_POST['p13'];
    $p14 = $_POST['p14'];
    $p2 = $_POST['p2'];
    $p31 = $_POST['p31'];
    $p32 = $_POST['p32'];
    $p33 = $_POST['p33'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];
    $p7 = $_POST['p7'];

    // Obter a data atual
    $data = date('Y-m-d');

    // Preparando e executando a consulta SQL
    $stmt = $conn->prepare("INSERT INTO formulario (disponibilidade_de_livros, ambiente_de_estudo, atendimento_dos_funcionarios, organizacao_dos_materiais, local_acolhedor_para_estudos, acesso_a_internet, disponibilidade_de_computadores, variedade_de_eventos_e_atividades, horario_de_funcionamento, disponibilidade_de_espacos, satisfacao_geral, comentario_adicional, data)
                VALUES (:p11, :p12, :p13, :p14, :p2, :p31, :p32, :p33, :p4, :p5, :p6, :p7, :data)");

    $stmt->bindValue(':p11', $p11);
    $stmt->bindValue(':p12', $p12);
    $stmt->bindValue(':p13', $p13);
    $stmt->bindValue(':p14', $p14);
    $stmt->bindValue(':p2', $p2);
    $stmt->bindValue(':p31', $p31);
    $stmt->bindValue(':p32', $p32);
    $stmt->bindValue(':p33', $p33);
    $stmt->bindValue(':p4', $p4);
    $stmt->bindValue(':p5', $p5);
    $stmt->bindValue(':p6', $p6);
    $stmt->bindValue(':p7', $p7);
    $stmt->bindValue(':data', $data);

    if ($stmt->execute()) {
        header("Location: ../Agradecimento/agradecimento.html");
        exit();
    }
}

// Fechando a conexão com o banco de dados
$conn = null;
