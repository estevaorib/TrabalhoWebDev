<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <link rel="stylesheet" href="../styles/questao3.css">
    <link rel="stylesheet" href="../styles/global.css">
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>Trabalho: Questão 03</h1>
        
    <p><b>Q2. Na mitologia egípcia qual são os filhos de Nut e Geb?</b></p>
    <ol>
        <li><a href="quest3b.php?resposta1=<?php echo "$resposta1";?>&resposta2=A"class="correct">Osíris, Ísis, Hórus Primordial, Néftis e Set.</a></li>
        <li><a href="quest3b.php?resposta1=<?php echo "$resposta1";?>&resposta2=A">Osíris, Ísis, Anbúbis, Rá e Khepri.</a></li>
        <li><a href="quest3b.php?resposta1=<?php echo "$resposta1";?>&resposta2=A">Osíris, Khepri, Anúbis, Bastet e Ísis.</a></li>
        <li><a href="quest3b.php?resposta1=<?php echo "$resposta1";?>&resposta2=A">Osíris, Anúbis, Onúris, Anhur e Set</a></li>
        <li><a href="quest3b.php?resposta1=<?php echo "$resposta1";?>&resposta2=A">Osíris, Thot, Rá, Hórus e Ísis</a></li>
    </ol>

        <?php
            $resposta1 = $_GET["resposta1"];
        ?>
        
        <p><a href="../index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>