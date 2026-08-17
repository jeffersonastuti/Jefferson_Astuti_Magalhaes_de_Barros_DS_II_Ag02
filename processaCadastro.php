<?php
// Verifica se a página foi acessada pelo envio do formulário.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Cada informação enviada pelo formulário é armazenada em uma variável.
    $nome = htmlspecialchars(trim($_POST["nome1"] ?? ""), ENT_QUOTES, "UTF-8");
    $idade = htmlspecialchars(trim($_POST["idade2"] ?? ""), ENT_QUOTES, "UTF-8");
    $profissao = htmlspecialchars(trim($_POST["profissao3"] ?? ""), ENT_QUOTES, "UTF-8");
    $salario = htmlspecialchars(trim($_POST["salario4"] ?? ""), ENT_QUOTES, "UTF-8");
    $experiencia = htmlspecialchars(trim($_POST["experiencia5"] ?? ""), ENT_QUOTES, "UTF-8");

    // Formata o salário somente para melhorar a apresentação na página.
    $salarioFormatado = is_numeric($salario)
        ? "R$ " . number_format((float) $salario, 2, ",", ".")
        : $salario;
} else {
    // Caso alguém abra o PHP diretamente, as variáveis recebem valores vazios.
    $nome = $idade = $profissao = $salarioFormatado = $experiencia = "";
}
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
            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <h1>Cadastro recebido</h1>
                <p class="subtitulo">Confira os dados enviados.</p>

                <div class="resultado">
                    <p><strong>Nome completo:</strong> <?= $nome ?></p>
                    <p><strong>Idade:</strong> <?= $idade ?> anos</p>
                    <p><strong>Profissão:</strong> <?= $profissao ?></p>
                    <p><strong>Salário pretendido:</strong> <?= $salarioFormatado ?></p>
                    <p><strong>Experiência anterior:</strong> <?= nl2br($experiencia) ?></p>
                </div>

                <div class="mensagem-personalizada">
                    <h2>Mensagem</h2>
                    <p>
                        Olá, <strong><?= $nome ?></strong>! Seu cadastro para oportunidades na área de
                        <strong><?= $profissao ?></strong> foi recebido com sucesso. A experiência informada,
                        “<?= $experiencia ?>”, será considerada durante a análise do perfil.
                    </p>
                </div>

                <a class="botao-voltar" href="cadastro.html">Voltar ao formulário</a>
            <?php else: ?>
                <h1>Nenhum cadastro enviado</h1>
                <p>Esta página deve ser acessada após o envio do formulário.</p>
                <a class="botao-voltar" href="cadastro.html">Ir para o formulário</a>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
