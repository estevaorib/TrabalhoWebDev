<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <link rel="stylesheet" href="../trabalho3trimestre/styles/questao2.css">
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>Trabalho: Questão 02</h1>

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
                        echo "<tr>";
                        echo "<td>$j</td>";
                        for($i = 46; $i <= 120; $i++){
                            $imc =  $i / ($j * $j) * 10000;
                            if($imc <= 16){
                                echo "<td class=\"muitograve\"></td>";
                            }
                            else if($imc > 16 && $imc <= 17){
                                echo "<td class=\"grave\"></td>";
                            }
                            else if($imc > 17 && $imc <= 18.5){
                                echo "<td class=\"baixo\"></td>";
                            }
                            else if($imc > 18.5 && $imc <= 25){
                                echo "<td class=\"ideal\"></td>";
                            }
                            else if($imc > 25 && $imc <= 30){
                                echo "<td class=\"sobrepeso\"></td>";
                            }
                            else if($imc > 30 && $imc <= 35){
                                echo "<td class=\"obesidade1\"></td>";
                            }
                            else if($imc > 35 && $imc <= 40){
                                echo "<td class=\"obesidade2\"></td>";
                            }
                            else if($imc > 40){
                                echo "<td class=\"obesidade3\"></td>";
                            }
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>