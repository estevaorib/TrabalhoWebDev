<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
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

        $aporte_inicial = isset($_GET['aporte_inicial']) ? floatval($_GET['aporte_inicial']) : 0;
        $periodo = isset($_GET['periodo']) ? intval($_GET['periodo']) : 0;
        $rendimento_mensal = isset($_GET['rendimento_mensal']) ? floatval($_GET['rendimento_mensal']) : 0.1;
        $aporte_mensal = isset($_GET['aporte_mensal']) ? floatval($_GET['aporte_mensal']) : 0;

        //$aporte_inicial = floatval($_GET["aporte_inicial"]);
        //$periodo = intval($_GET["periodo"]);
        //$rendimento_mensal = floatval($_GET["rendimento_mensal"]);
        //$aporte_mensal = floatval($_GET["aporte_mensal"]);

        $resultados = array();
        $valorAtual = $aporte_inicial;
        for ($mes = 1; $mes <= $periodo; $mes++) {
            if ($mes === 1) {
                $aporte = 0; // No primeiro mês não há aporte mensal
            } else {
                $aporte = $aporte_mensal;
            }

            list($rendimento, $total) = calcularRendimento($valorAtual, $aporte, $rendimento_mensal);

            $resultados[] = array(
                'mes' => $mes,
                'valor_inicial' => $valorAtual,
                'aporte_mensal' => $aporte,
                'rendimento' => $rendimento,
                'total' => $total
            );

            $valorAtual = $total;
        }
        ?>

    <?php
        //if($rendimento_mensal == 0 ||){echo "Rendimento Mensal deve ser maior que 0(zero)";}
        //else{
        if($aporte_inicial >= 100 && $periodo != 0 && $rendimento_mensal != 0 && $aporte_mensal >= 100)
        {
            echo "<h2>Resultados da Simulação</h2> 
            <table>
            <tr>
                <th>Mês</th>
                <th>Valor Inicial</th>
                <th>Aporte Mensal</th>
                <th>Rendimento</th>
                <th>Total</th>
            </tr>";
            
        }
        else{echo"";}
        //}
            ?>

    <?php foreach ($resultados as $resultado): ?>
    <tr>
        <td><?php echo $resultado['mes']; ?></td>
        <td><?php echo number_format($resultado['valor_inicial'], 2, ',', '.'); ?></td>
        <td><?php echo number_format($resultado['aporte_mensal'], 2, ',', '.'); ?></td>
        <td><?php echo number_format($resultado['rendimento'], 2, ',', '.'); ?></td>
        <td><?php echo number_format($resultado['total'], 2, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
    <?php } ?>
    <p><a href="index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
    
</body>

</html>