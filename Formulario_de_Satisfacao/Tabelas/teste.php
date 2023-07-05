<!DOCTYPE html>
<html>
<head>
    <title>Teste de Inserção de Dados</title>
</head>
<body>
    <h1>Teste de Inserção de Dados</h1>
    <form method="POST" action="dados_tabela.php">
    a) Disponibilidade de livros:
                    </div>
                    <div class="col">
                        <input type="radio" name="p11" id="p11" value= 5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p11" id="p11" value= 4 ><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p11" id="p11" value= 3 ><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p11" id="p11" value= 2 ><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p11" id="p11" value= 1 ><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
        <label>Ambiente de Estudo:</label>
        <input type="number" name="p12"><br>

        <label>Atendimento dos Funcionários:</label>
        <input type="number" name="p13"><br>

        <label>Organização dos Materiais:</label>
        <input type="number" name="p14"><br>

        <label>Local Acolhedor para Estudos:</label>
        <input type="number" name="p2"><br>

        <label>Acesso à Internet:</label>
        <input type="number" name="p31"><br>

        <label>Disponibilidade de Computadores:</label>
        <input type="number" name="p32"><br>

        <label>Variedade de Eventos e Atividades:</label>
        <input type="number" name="p33"><br>

        <label>Horário de Funcionamento:</label>
        <input type="number" name="p4"><br>

        <label>Disponibilidade de Espaços:</label>
        <input type="number" name="p5"><br>

        <label>Satisfação Geral:</label>
        <input type="number" name="p6"><br>

        <label>Comentário Adicional:</label>
        <textarea name="comentario_adicional"></textarea><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
