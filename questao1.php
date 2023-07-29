<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <form method="get" action="">
        <fieldset>
            <legend>Critérios para geração</legend>
            
            <div class="cabecalho">
                <label for="quant">Quantidade de elementos: </label>
                <input type="number" name="quant" id="quant" min=1 max=15 value="0">
            </div>

            <div class="opcoes">
                <div>
                    <input type="radio" name="op" id="texto" value="texto" onclick="this.form.submit()">
                    <label for="texto">Texto</label>
                </div>
                <div>
                    <input type="radio" name="op" id="senha" value="senha" onclick="this.form.submit()">
                    <label for="senha">Senha</label>
                </div>
                <div>
                    <input type="radio" name="op" id="botao" value="botao" onclick="this.form.submit()">
                    <label for="botao">Botão</label>
                </div>
                <div>
                    <input type="radio" name="op" id="radio" value="radio" onclick="this.form.submit()">
                    <label for="radio">Rádio</label>
                </div>
                <div>
                    <input type="radio" name="op" id="selecao" value="selecao" onclick="this.form.submit()">
                    <label for="selecao">Caixa de Seleção</label>
                </div>
                <div>
                    <input type="radio" name="op" id="faixa" value="faixa" onclick="this.form.submit()">
                    <label for="faixa">Faixa</label>
                </div>
            </div>
        </fieldset>
    </form>
    <?php
    $quant = isset($_GET['quant']) ? intval($_GET['quant']) : 0;

    $opselected = isset($_GET['op']) ? $_GET['op'] : null;

    if($quant >= 1 && $quant <= 15){
        if($opselected != null){
            if($opselected == "texto"){
                for($i = 0; $i < $quant; $i++){
                    echo "<input type=\"text\" name=\"text\$i\" id=\"text\$i\" placeholder=\"Caixa de Texto $i\"><br>";
                }
        
                for($i = 0; $i < $quant; $i++){
                    echo  "&lt;input type=\"text\" name=\"text$i\" id=\"text$i\" placeholder=\"Caixa de Texto $i\"&gt;<br>";
                }
            }
            else if($opselected == "senha"){
                for($i = 0; $i < $quant; $i++){
                    echo "<input type=\"password\" name=\"password\$i\" id=\"password\$i\" placeholder=\"Senha $i\"><br>";
                }
        
                for($i = 0; $i < $quant; $i++){
                    echo  "&lt;input type=\"password\" name=\"password$i\" id=\"password$i\" placeholder=\"Senha $i\"&gt;<br>";
                }
            }
            else if($opselected == "botao"){
                for($i = 0; $i < $quant; $i++){
                    echo "<input type=\"button\" value=\"Botão $i\"><br>";
                }
        
                for($i = 0; $i < $quant; $i++){
                    echo  "&lt;input type=\"button\" value=\"Botão $i\"&gt;<br>";
                }
            }
            else if($opselected == "radio"){
                for($i = 0; $i < $quant; $i++){
                    echo "<input type=\"radio\" name=\"radio\" id=\"\"><br>";
                }
        
                for($i = 0; $i < $quant; $i++){
                    echo  "&lt;input type=\"button\" value=\"Botão $i\"&gt;<br>";
                }
            }
        }
        else{
            echo "Escolha uma opção de entrada!";
        }
    }
    else{
        echo "A quantidade deve ser maior ou igual a 1 e menor ou igual a 15!";
    }
    ?>
</body>
</html>