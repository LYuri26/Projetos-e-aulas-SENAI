<?php
// Dados de conexão com o banco de dados
$host = 'localhost';
$dbname = 'Agendamento';
$user = 'root';
$pass = '';

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve algum erro na conexão
if (!$conn) {
    die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}

// Verifica se os dados foram submetidos via formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtém os dados do formulário
    $id_reserva = $_POST["id_reserva"];
    $motivo = $_POST["motivo"];
    
    // Inicia uma transação no banco de dados
    mysqli_begin_transaction($conn);

    try {
        // Insere o registro na tabela de cancelamentos
        $sql_insert_cancelamento = "INSERT INTO cancelamentos (id_reserva, motivo) VALUES ('$id_reserva', '$motivo')";
        mysqli_query($conn, $sql_insert_cancelamento);

        // Remove o agendamento correspondente da tabela de agendamentos
        $sql_delete_agendamento = "DELETE FROM agendamentos WHERE id = '$id_reserva'";
        mysqli_query($conn, $sql_delete_agendamento);

        // Confirma a transação
        mysqli_commit($conn);

        // Exibe uma mensagem de sucesso
        echo "Cancelamento realizado com sucesso.";

    } catch (Exception $e) {
        // Em caso de erro, desfaz a transação e exibe uma mensagem de erro
        mysqli_rollback($conn);
        echo "Erro ao realizar o cancelamento: " . $e->getMessage();
    }
}
?>
