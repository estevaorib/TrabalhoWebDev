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
            $resposta3 = isset($_GET["resposta3"]) ? ($_GET["resposta3"]) : null;
        ?>

    <p><b>Q4. Na mitologia japonesa, em algumas versões, Kunitokotachi, apareceu com 2 deuses subornidados que seriam irmãos e também marido e mulher, estes eram respectivamente:  </b></p>
    <ol type="A">
        <li><a href="resultado.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=<?php echo"$resposta3";?>&resposta4=A">Sun Wukong e Xiwangmu</a></li>
        <li><a href="resultado.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=<?php echo"$resposta3";?>&resposta4=B">Yu Huang e Guan Yin</a></li>
        <li><a href="resultado.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=<?php echo"$resposta3";?>&resposta4=C">Hachiman e Chang'e</a></li>
        <li><a href="resultado.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=<?php echo"$resposta3";?>&resposta4=D" class="certa">Izanagi e Izanami</a></li>
        <li><a href="resultado.php?resposta1=<?php echo"$resposta1";?>&resposta2=<?php echo"$resposta2";?>&resposta3=<?php echo"$resposta3";?>&resposta4=E">Susanoo e Amaterasu</a></li>
    </ol>
        <p><a href="quest3a.php">Cancelar</a></p>
        <p><a href="../index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>