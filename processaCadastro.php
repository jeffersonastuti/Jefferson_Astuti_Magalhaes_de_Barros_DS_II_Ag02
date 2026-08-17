<?php
// Recebe os dados enviados pelo formulário e armazena cada informação em uma variável.
$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação do Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main class="container">
        <section class="cartao">
            <h1>Cadastro recebido</h1>
            <p class="subtitulo">Confira os dados enviados.</p>

            <div class="resultado">
                <?php
                echo "<p><strong>Nome completo:</strong> $nome</p>";
                echo "<p><strong>Idade:</strong> $idade anos</p>";
                echo "<p><strong>Profissão:</strong> $profissao</p>";
                echo "<p><strong>Salário pretendido:</strong> R$ $salario</p>";
                echo "<p><strong>Experiência anterior:</strong> $experiencia</p>";
                ?>
            </div>

            <div class="mensagem-personalizada">
                <h2>Mensagem</h2>
                <?php
                echo "<p>Olá, <strong>$nome</strong>! Seu cadastro para a área de <strong>$profissao</strong> foi recebido com sucesso. Também registramos sua experiência: $experiencia.</p>";
                ?>
            </div>

            <a class="botao-voltar" href="cadastro.html">Voltar ao formulário</a>
        </section>
    </main>
</body>
</html>
