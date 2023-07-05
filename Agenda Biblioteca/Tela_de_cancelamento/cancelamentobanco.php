<?php
// Incluir o arquivo com as novas tabelas
require_once '/home/lenon/Documentos/Agenda Biblioteca/Tabelas/novastabelas.php';

// Dados de conexão com o banco de dados
$host = 'localhost';
$dbname = 'Agendamento';
$user = 'root';
$pass = '';

// Conexão com o banco de dados
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Configura o modo de erros para lançar exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    exit;
}

// Verifica se os dados foram submetidos via formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém os dados do formulário
    $id_reserva = $_POST["id_reserva"];
    $motivo = $_POST["motivo"];

    // Inicia uma transação no banco de dados
    $conn->beginTransaction();

    try {
        // Insere o registro na tabela de $nome_cancelamentos
        $sql_insert_cancelamento = "INSERT INTO $nome_cancelamentos (id_reserva, motivo) VALUES (:id_reserva, :motivo)";
        $stmt = $conn->prepare($sql_insert_cancelamento);
        $stmt->bindParam(':id_reserva', $id_reserva);
        $stmt->bindParam(':motivo', $motivo);
        $stmt->execute();

        // Remove o agendamento correspondente da tabela de $nome_agendamentos
        $sql_delete_agendamento = "DELETE FROM $nome_agendamentos WHERE id = :id_reserva";
        $stmt = $conn->prepare($sql_delete_agendamento);
        $stmt->bindParam(':id_reserva', $id_reserva);
        $stmt->execute();

        // Confirma a transação
        $conn->commit();

        // Exibe uma mensagem de sucesso
        echo "Cancelamento realizado com sucesso.";
    } catch (Exception $e) {
        // Em caso de erro, desfaz a transação e exibe uma mensagem de erro
        $conn->rollback();
        echo "Erro ao realizar o cancelamento: " . $e->getMessage();
    }
}
