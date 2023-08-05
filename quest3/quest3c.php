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

        <?php
            $resposta1 = isset($_GET["resposta1"]) ? ($_GET["resposta1"]) : null;
            $resposta2 = isset($_GET["resposta2"]) ? ($_GET["resposta2"]) : null;
        ?>

    <p><b>Q3. Na mitologia grega Fórcis e Ceto, filhos dos Titãs e Titânides tiveram duas tríades de filhos, que foram: </b></p>
    <ol type="A">
        <li><a href="quest3d.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=A">Zeus;Hades;Poseidon e Os Juizes do Inferno(Minos, Éaco e Radamanto.)</a></li>
        <li><a href="quest3d.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=B">Senhores do Tempo(Chronos, Kairós e Aíôn.) e Zeus;Hades;Poseidon</a></li>
        <li><a href="quest3d.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=C">Górgonas(Medusa, Euríale e Esteno) e Zeus;Hades;Poseidon </a></li>
        <li><a href="quest3d.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=D">Zeus;Hades;Poseidon e as Gréias(Enio, Pérfides e Dino) </a></li>
        <li><a href="quest3d.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=E" class="certa">Górgonas(Medusa, Euríale e Esteno) e as Gréias(Enio, Pérfides e Dino)</a></li>
    </ol>
        <p><a href="quest3a.php">Cancelar</a></p>
        <p><a href="../index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>