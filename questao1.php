<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>Trabalho: Questão 01</h1>
        <form method="get" action="">
            <fieldset>
                <legend>Critérios para geração</legend>
        
                <div class="cabecalho">
                    <label for="quant">Quantidade de elementos: </label>
                    <input type="number" name="quant" id="quant" min=1 max=15 value="1">
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
                        echo "<input type=\"text\" name=\"text$i\" id=\"text$i\" placeholder=\"Caixa de Texto $i\"><br>";
                    }
        
                    for($i = 0; $i < $quant; $i++){
                        echo  "&lt;input type=\"text\" name=\"text$i\" id=\"text$i\" placeholder=\"Caixa de Texto $i\"&gt;<br>";
                    }
                }
                else if($opselected == "senha"){
                    for($i = 0; $i < $quant; $i++){
                        echo "<input type=\"password\" name=\"password$i\" id=\"password$i\" placeholder=\"Senha $i\"><br>";
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
                        echo "<input type=\"radio\" name=\"radio\" id=\"radio$i\">";
                        echo "<label for=\"radio$i\">Radio $i</label><br>";
                    }
        
                    for($i = 0; $i < $quant; $i++){
                        echo "&lt;input type=\"radio\" name=\"radio\" id=\"radio$i\"&gt;<br>";
                        echo "&lt;label for=\"radio$i\"&gt;Radio $i&lt;/label&gt;<br><br>";
                    }
                }
                else if($opselected == "selecao"){
                    for($i = 0; $i < $quant; $i++){
                        echo "<input type=\"checkbox\" name=\"checkbox$i\" id=\"checkbox$i\">";
                        echo "<label for=\"checkbox$i\">Caixa de Seleção $i</label><br>";
                    }
                    echo "<br>";
        
                    for($i = 0; $i < $quant; $i++){
                        echo "&lt;input type=\"checkbox\" name=\"checkbox$i\" id=\"checkbox$i\"&gt;<br>";
                        echo "&lt;label for=\"checkbox$i\"&gt;Caixa de Seleção $i&lt;/label&gt;<br><br>";
                    }
                }
                else if($opselected == "faixa"){
                    $valuefaixa = 5;
                    for($i = 0; $i < $quant; $i++){
                        echo "<input type=\"range\" name=\"range$i\" id=\"range$i\" min=\"0\" max =\"100\" value=\"$valuefaixa\">";
                        echo "<label for=\"range$i\">Faixa $i</label><br>";
                        $valuefaixa = $valuefaixa + 5;
                    }
                    echo "<br>";
        
                    $valuefaixa = 5;
                    for($i = 0; $i < $quant; $i++){
                        echo "&lt;input type=\"range\" name=\"range$i\" id=\"range$i\" min=\"0\" max=\"100\" value=\"$valuefaixa\"&gt;<br>";
                        echo "&lt;label for=\"range$i\"&gt;Faixa $i&lt;/label&gt;<br><br>";
                        $valuefaixa = $valuefaixa + 5;
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
        <p><a href="index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p>Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>