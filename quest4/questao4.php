<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
    <link rel="stylesheet" href="../styles/questao4.css">
    <link rel="stylesheet" href="../styles/global.css">
</head>

<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <?php
        $aporte_inicial = isset($_GET['aporte_inicial']) ? floatval($_GET['aporte_inicial']) : 1;
        $periodo = isset($_GET['periodo']) ? intval($_GET['periodo']) : 1;
        $rendimento_mensal = isset($_GET['rendimento_mensal']) ? floatval($_GET['rendimento_mensal']) : 0.1;
        $aporte_mensal = isset($_GET['aporte_mensal']) ? floatval($_GET['aporte_mensal']) : 1;
    ?>

    <main>
        <h1>Trabalho: Questão 04</h1>
    <form method="get" action="">
        <fieldset>
            <legend>Parâmetros</legend>
            
            <div class="inputs">
                <div class="entradas">
                    <label for="aporte_inicial">Aporte inicial:</label>
                    <?php
                        echo "<input type=\"number\" name=\"aporte_inicial\" id=\"aporte_inicial\" value=\"$aporte_inicial\" min=\"1\" max=\"999999.99\" required>";
                    ?>
                    <label for="aporte_inicial"> (Limite: 999.999,99)</label>
                </div>
                <div class="entradas">
                    <label for="periodo">Período(meses):</label>
                    <?php
                        echo "<input type=\"number\" name=\"periodo\" id=\"periodo\" value=\"$periodo\" min=\"1\" max=\"480\" required>";
                    ?>
                    <label for="periodo"> (Limite: 1 a 480:)</label>
                </div>
                <div class="entradas">
                    <label for="rendimento_mensal">Rendimento mensal:</label>
                    <?php
                        echo "<input type=\"number\" name=\"rendimento_mensal\" id=\"rendimento_mensal\" value=\"$rendimento_mensal\" step=\"0.1\" min=\"0.1\" max=\"20\" required>";
                    ?>
                    <label for="rendimento_mensal"> (Limite: 0.1% a 20%)</label>
                </div>
                <div class="entradas">
                    <label for="aporte_mensal">Aporte mensal:</label>
                    <?php
                        echo "<input type=\"number\" name=\"aporte_mensal\" id=\"aporte_mensal\" value=\"$aporte_mensal\" min=\"1\" required>";
                    ?>
                    <label for="aporte_mensal"> (Limite: 999.999,99)</label><br>
                </div>
            </div>

            <input type="submit" class="botao" name="botao" value="Simular">
        </fieldset>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "GET"){
            function calcularRendimento($valorInicial, $aporteMensal, $taxaRendimento)
            {
                $rendimento = ($valorInicial + $aporteMensal) * ($taxaRendimento / 100);
                $total = $valorInicial + $aporteMensal + $rendimento;
                return array($rendimento, $total);
            }

            $resultados = array();
            $valorAtual = $aporte_inicial;

            for ($mes = 1; $mes <= $periodo; $mes++) {
                if ($mes === 1) {
                    $aporte = 0; //No primeiro mês não há aporte mensal
                } 
                else {
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

            if(isset($_GET["botao"])){
                if($aporte_inicial >= 1 && $periodo >= 1 && $rendimento_mensal >= 0.1 && $aporte_mensal >= 1)
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
                else{
                    echo"";
                }
            }
            else{
                echo "";
            }

            if(isset($_GET["botao"])){
                foreach ($resultados as $resultado){
                    echo "<tr>";
                    echo "<td>" . $resultado['mes'] . "</td>";
                    echo "<td>" . number_format($resultado['valor_inicial'], 2, ',', '.') . "</td>";
                    echo "<td>" . number_format($resultado['aporte_mensal'], 2, ',', '.') . "</td>";
                    echo "<td>" . number_format($resultado['rendimento'], 2, ',', '.') . "</td>";
                    echo "<td>" . number_format($resultado['total'], 2, ',', '.') . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    ?>
    <p><a href="../index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>