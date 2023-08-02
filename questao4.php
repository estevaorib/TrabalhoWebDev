<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>Trabalho: Questão 04</h1>
    <form method="get" action="">
        <fieldset>
            <legend>Parâmetros</legend>
            <label for="aporte_inicial">Aporte inicial:</label>
            <input type="number" name="aporte_inicial" id="aporte_inicial" min="100" max="999999.99" required>(Limite:
            999.999,99)<br>

            <label for=" periodo">Período(meses):</label>
            <input type="number" name="periodo" id="periodo" min="1" max="480" required> (Limite: 1 a 480:)<br>

            <label for="rendimento_mensal">Rendimento mensal:</label>
            <input type="number" name="rendimento_mensal" id="rendimento_mensal" max="20" required>(Limite: 0.1% a
            20%)<br>

            <label for="aporte_mensal">Aporte mensal:</label>
            <input type="number" name="aporte_mensal" id="aporte_mensal" min="100" required>(Limite: 999.999,99)<br>

            <input type="submit" value="Simular">
        </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        function calcularRendimento($valorInicial, $aporteMensal, $taxaRendimento)
        {
            $rendimento = ($valorInicial + $aporteMensal) * ($taxaRendimento / 100);
            $total = $valorInicial + $aporteMensal + $rendimento;
            return array($rendimento, $total);
        }
        $aporte_inicial = floatval($_GET["aporte_inicial"]);
        $periodo = intval($_GET["periodo"]);
        $rendimento_mensal = floatval($_GET["rendimento_mensal"]);
        $aporte_mensal = floatval($_GET["aporte_mensal"]);
