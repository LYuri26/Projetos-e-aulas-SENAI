<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Satisfação</title>
    <link rel="stylesheet" href="./index.css">
</head>

<header>
    <img src="./Imagens/logos/senai-logo-0.png" alt="Logo SENAI" class="senai">
    <h2 id="formulario">Formulário de Satisfação</h2>
</header>

<body>
    <div class="page-wrapper">
        <h4>1. Avalie os seguintes aspectos da biblioteca:</h4>
        <form id="pesquisaForm" action="./Tabelas/dados_tabela.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col">
                        a) Disponibilidade de livros:
                    </div>
                    <div class="col">
                        <input type="radio" name="p11" id="p11" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p11" id="p11" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p11" id="p11" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p11" id="p11" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p11" id="p11" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        b) Ambiente de estudo:
                    </div>
                    <div class="col">
                        <input type="radio" name="p12" id="p12" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p12" id="p12" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p12" id="p12" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p12" id="p12" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p12" id="p12" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        c) Atendimento dos funcionários:
                    </div>
                    <div class="col">
                        <input type="radio" name="p13" id="p13" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p13" id="p13" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p13" id="p13" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p13" id="p13" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p13" id="p13" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        d) Organização dos materiais:
                    </div>
                    <div class="col">
                        <input type="radio" name="p14" id="p14" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p14" id="p14" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p14" id="p14" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p14" id="p14" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p14" id="p14" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">

                    </div>
                </div>
            </div>

            <h4>2. Você considera a biblioteca um local acolhedor para estudos e leituras?</h4>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <input type="radio" name="p2" id="p2" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p2" id="p2" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p2" id="p2" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p2" id="p2" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p2" id="p2" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
                </div>
            </div>

            <h4> 3. Em relação aos serviços oferecidos pela biblioteca, como você avalia:</h4>
            <div class="container">
                <div class="row">
                    <div class="col">
                        a) Acesso à internet:
                    </div>
                    <div class="col">
                        <input type="radio" name="p31" id="p31" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p31" id="p31" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p31" id="p31" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p31" id="p31" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p31" id="p31" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        b) Disponibilidade de computadores:
                    </div>
                    <div class="col">
                        <input type="radio" name="p32" id="p32" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p32" id="p32" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p32" id="p32" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p32" id="p32" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p32" id="p32" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        c) Variedade de eventos e atividades:
                    </div>
                    <div class="col">
                        <input type="radio" name="p33" id="p33" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                        <input type="radio" name="p33" id="p33" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                        <input type="radio" name="p33" id="p33" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                        <input type="radio" name="p33" id="p33" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                        <input type="radio" name="p33" id="p33" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                    </div>
                </div>
            </div>

            <h4>4. O horário de funcionamento da biblioteca atende às suas necessidades?</h4>
            <div class="container">
                <div class="col">
                    <input type="radio" name="p4" id="p4" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                    <input type="radio" name="p4" id="p4" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                    <input type="radio" name="p4" id="p4" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                    <input type="radio" name="p4" id="p4" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                    <input type="radio" name="p4" id="p4" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">
                </div>
            </div>
    </div>

    <h4>5. Como você avalia a disponibilidade de espaços de estudo em grupo?</h4>
    <div class="container">
        <div class="col">
            <input type="radio" name="p5" id="p5" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
            <input type="radio" name="p5" id="p5" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
            <input type="radio" name="p5" id="p5" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
            <input type="radio" name="p5" id="p5" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
            <input type="radio" name="p5" id="p5" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">

        </div>
    </div>
    </div>

    <h4>6. Qual é o seu nível de satisfação geral com a biblioteca?</h4>
    <div class="container">
        <div class="row">
            <div class="col">
                <input type="radio" name="p6" id="p6" value=5 required><img src="./Imagens/imagens do formulario/muito-satisfeito.png" alt="Muito Satisfeito">
                <input type="radio" name="p6" id="p6" value=4><img src="./Imagens/imagens do formulario/pouco-satisfeito.png" alt="Satisfeito">
                <input type="radio" name="p6" id="p6" value=3><img src="./Imagens/imagens do formulario/neutro.png" alt="Neutro">
                <input type="radio" name="p6" id="p6" value=2><img src="./Imagens/imagens do formulario/pouco-insatisfeito.png" alt="Insatisfeito">
                <input type="radio" name="p6" id="p6" value=1><img src="./Imagens/imagens do formulario/muito-insatisfeito.png" alt="Muito Insatisfeito">

            </div>
        </div>
    </div>

    <h4>7. Por favor, compartilhe qualquer comentário adicional ou sugestões de melhoria que você tenha para a biblioteca:</h4>
    <div class="container">
        <div class="col">
            <textarea name="p7" id="p7" rows=4 cols="1000"></textarea>
        </div>
    </div>

    <!-- <h4>8. Se você desejar, por favor, deixe seu nome e informações de contato (opcional):</h4>
    <div class="container">
        <div class="row">
            <div class="col">
                Nome:
            </div>
            <div class="col">
                <input type="text" id="nome" pattern="[A-Za-zÀ-ú\s]+" title="Apenas letras são permitidas" required><br>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col">
                E-mail:
            </div>
            <div class="col">
                <input type="email" name="email" id="email" required><br>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col">
                Telefone:
            </div>
            <div class="col">
                <input type="tel" name="telefone" id="telefone" pattern="[0-9]+" title="Apenas números são permitidos" required>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col">
            <button class="btn-avaliar" type="submit">
                Enviar!
            </button>
        </div>
    </div>
    </div>
    <?php
    // Verifica se há uma mensagem de erro na URL
    if (isset($_GET['erro']) && $_GET['erro'] == 1) {
        echo '<p class="erro">Por favor, preencha todos os campos obrigatórios.</p>';
    }
    ?>

    <script src="./Processamento/criar_tabelas.js"></script>
</body>

<footer>
    <ul>© 2023 Senai Uberaba | Instrutor: Lenon Yuri
</footer>

</html>