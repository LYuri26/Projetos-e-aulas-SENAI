<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Formulários</title>
    <link rel="stylesheet" type="text/css" href="./estilo_tabela_resultado.css">
    <link rel="stylesheet" type="text/css" href="../index.css">
</head>

<header>
    <img src="../Imagens/logos/senai-logo-0.png" alt="Logo SENAI" class="senai">
    <h2 id="formulario">Formulário de Satisfação</h2>
</header>

<body>
    <?php
    require_once '../Processamento/conexao.php';

    try {
        // Consulta SQL para selecionar os dados da tabela
        $sql = "SELECT * FROM formulario";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Verifica se existem registros retornados
        if ($stmt->rowCount() > 0) {
            echo "<table class='formulario-table'>";
            echo "<tr><th>ID</th><th>Disponibilidade de Livros</th><th>Ambiente de Estudo</th><th>Atendimento dos Funcionários</th><th>Organização dos Materiais</th><th>Local Acolhedor para Estudos</th><th>Acesso à Internet</th><th>Disponibilidade de Computadores</th><th>Variedade de Eventos e Atividades</th><th>Horário de Funcionamento</th><th>Disponibilidade de Espaços</th><th>Satisfação Geral</th><th>Comentário Adicional</th><th>Data</th></tr>";

            // Loop através dos registros retornados
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['disponibilidade_de_livros']."</td>";
                echo "<td>".$row['ambiente_de_estudo']."</td>";
                echo "<td>".$row['atendimento_dos_funcionarios']."</td>";
                echo "<td>".$row['organizacao_dos_materiais']."</td>";
                echo "<td>".$row['local_acolhedor_para_estudos']."</td>";
                echo "<td>".$row['acesso_a_internet']."</td>";
                echo "<td>".$row['disponibilidade_de_computadores']."</td>";
                echo "<td>".$row['variedade_de_eventos_e_atividades']."</td>";
                echo "<td>".$row['horario_de_funcionamento']."</td>";
                echo "<td>".$row['disponibilidade_de_espacos']."</td>";
                echo "<td>".$row['satisfacao_geral']."</td>";
                echo "<td>".$row['comentario_adicional']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Nenhum registro encontrado.";
        }

    } catch(PDOException $e) {
        die("Erro na consulta: " . $e->getMessage());
    }

    // Fechando a conexão com o banco de dados
    $conn = null;
    ?>
</body>

<footer>
    <ul>© 2023 Senai Uberaba | Instrutor: Lenon Yuri
</footer>

</html>
