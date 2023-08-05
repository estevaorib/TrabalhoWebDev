<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <link rel="stylesheet" href="../styles/questao2.css">
    <link rel="stylesheet" href="../styles/global.css">
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>Trabalho: Questão 02</h1>

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <?php
                            for($i = 46; $i <= 120; $i++){
                                echo "<th>$i</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($j = 146; $j <= 210; $j++){
                            echo "<tr class=\"coluna\">";
                            echo "<td>$j</td>";
                            for($i = 46; $i <= 120; $i++){
                                $imc =  $i / ($j * $j) * 10000;
                                $imcformatado = number_format($imc, 1, '.');
                                if($imc < 16){
                                    echo "<td class=\"muitograve colorido\" title=\"Baixo muito grave&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                                else if($imc >= 16 && $imc < 17){
                                    echo "<td class=\"grave colorido\" title=\"Baixo grave&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                                else if($imc >= 17 && $imc < 18.5){
                                    echo "<td class=\"baixo colorido\" title=\"Baixo&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                                else if($imc >= 18.5 && $imc < 25){
                                    echo "<td class=\"ideal colorido\" title=\"Ideal&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                                else if($imc >= 25 && $imc < 30){
                                    echo "<td class=\"sobrepeso colorido\" title=\"Sobrepeso&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                                else if($imc >= 30 && $imc < 35){
                                    echo "<td class=\"obesidade1 colorido\" title=\"Obesidade I&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                                else if($imc >= 35 && $imc < 40){
                                    echo "<td class=\"obesidade2 colorido\" title=\"Obesidade II&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                                else if($imc >= 40){
                                    echo "<td class=\"obesidade3 colorido\" title=\"Obesidade III&#013;$i kg&#013;$j cm&#013;$imcformatado\"></td>";
                                }
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <p><a href="../index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>