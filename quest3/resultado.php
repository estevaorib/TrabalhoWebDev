<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <link rel="stylesheet" href="../styles/questao3.css">
    <link rel="stylesheet" href="../styles/global.css">
    <script src="https://kit.fontawesome.com/919844cdbf.js" crossorigin="anonymous"></script>
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
        $resposta4 = isset($_GET["resposta4"]) ? ($_GET["resposta4"]) : null;
        ?>

        <ol>
            
            <li><?php echo "$resposta1 &#32;";
                if ($resposta1 == "D") {
                    echo "<i class=\"fa-solid fa-square-check certa\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-square-xmark errada\"></i>";
                } ?></li>
            <li><?php echo "$resposta2 &#32;";
                if ($resposta2 == "A") {
                    echo "<i class=\"fa-solid fa-square-check certa\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-square-xmark errada\"></i>";
                } ?></li>
            <li><?php echo "$resposta3 &#32;";
                if ($resposta3 == "E") {
                    echo "<i class=\"fa-solid fa-square-check certa\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-square-xmark errada\"></i>";
                } ?></li>
            <li><?php echo "$resposta4 &#32;";
                if ($resposta4 == "D") {
                    echo "<i class=\"fa-solid fa-square-check certa\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-square-xmark errada\"></i>";
                } ?></li>
        </ol>
        <p><a href="../index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>