<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
    <link rel="stylesheet" href="../styles/global.css">
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <?php
        $quant = isset($_GET['quant']) ? intval($_GET['quant']) : 1;
        $opselected = isset($_GET['op']) ? $_GET['op'] : 'op';
    ?>

    <main>
        <h1>Trabalho: Questão 01</h1>
        <form method="get" action="">
            <fieldset>
                <legend>Critérios para geração</legend>
        
                <div class="cabecalho">
                    <label for="quant">Quantidade de elementos: </label>
                    <?php echo "<input type=\"number\" name=\"quant\" id=\"quant\" min=1 max=15 value=\"$quant\">" ?>
                    <label for="quant">(1 até 15)</label>
                </div>
                <div class="opcoes">
                    <div>
                        <?php
                        if($opselected == "texto"){
                            echo "<input type=\"radio\" checked name=\"op\" id=\"texto\" value=\"texto\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"texto\">Texto</label>";
                        }
                        else{
                            echo "<input type=\"radio\" name=\"op\" id=\"texto\" value=\"texto\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"texto\">Texto</label>";
                        }
                        ?>
                    </div>
                    <div>
                        <?php
                        if($opselected == "senha"){
                            echo "<input type=\"radio\" checked name=\"op\" id=\"senha\" value=\"senha\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"senha\">Senha</label>";
                        }
                        else{
                            echo "<input type=\"radio\" name=\"op\" id=\"senha\" value=\"senha\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"senha\">Senha</label>";
                        }
                        ?>
                    </div>
                    <div>
                        <?php
                        if($opselected == "botao"){
                            echo "<input type=\"radio\" checked name=\"op\" id=\"botao\" value=\"botao\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"botao\">Botão</label>";
                        }
                        else{
                            echo "<input type=\"radio\" name=\"op\" id=\"botao\" value=\"botao\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"botao\">Botão</label>";
                        }
                        ?>
                    </div>
                    <div>
                        <?php
                        if($opselected == "radio"){
                            echo "<input type=\"radio\" checked name=\"op\" id=\"radio\" value=\"radio\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"radio\">Rádio</label>";
                        }
                        else{
                            echo "<input type=\"radio\" name=\"op\" id=\"radio\" value=\"radio\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"radio\">Rádio</label>";
                        }
                        ?>
                    </div>
                    <div>
                        <?php
                        if($opselected == "selecao"){
                            echo "<input type=\"radio\" checked name=\"op\" id=\"selecao\" value=\"selecao\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"selecao\">Caixa de Seleção</label>";
                        }
                        else{
                            echo "<input type=\"radio\" name=\"op\" id=\"selecao\" value=\"selecao\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"selecao\">Caixa de Seleção</label>";
                        }
                        ?>   
                    </div>
                    <div>
                        <?php
                        if($opselected == "faixa"){
                            echo "<input type=\"radio\" checked name=\"op\" id=\"faixa\" value=\"faixa\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"faixa\">Faixa</label>";
                        }
                        else{
                            echo "<input type=\"radio\" name=\"op\" id=\"faixa\" value=\"faixa\" onclick=\"this.form.submit()\">";
                            echo "<label for=\"faixa\">Faixa</label>";
                        }
                        ?>
                    </div>
                </div>
            </fieldset>
        </form>

        <hr>
        
        <?php
            if($quant >= 1 && $quant <= 15){
                if($opselected != null){
                    if($opselected == "texto"){
                        $num = 1;
                        for($i = 0; $i < $quant; $i++){
                            echo "<input type=\"text\" name=\"text$num\" id=\"text$num\" placeholder=\"Caixa de Texto $num\"><br>";
                            $num++;
                        }

                        echo "<br>";
                        $num = 1;
                        
                        for($i = 0; $i < $quant; $i++){
                            echo  "<code>&lt;input type=\"text\" name=\"text$num\" id=\"text$num\" placeholder=\"Caixa de Texto $num\"&gt;</code><br>";
                            $num++;
                        }
                    }
                    else if($opselected == "senha"){
                        $num = 1;
                        for($i = 0; $i < $quant; $i++){
                            echo "<input type=\"password\" name=\"password$num\" id=\"password$num\" placeholder=\"Senha $num\"><br>";
                            $num++;
                        }

                        echo "<br>";
                        $num = 1;
            
                        for($i = 0; $i < $quant; $i++){
                            echo  "<code>&lt;input type=\"password\" name=\"password$num\" id=\"password$num\" placeholder=\"Senha $num\"&gt;</code><br>";
                            $num++;
                        }
                    }
                    else if($opselected == "botao"){
                        $num = 1;
                        for($i = 0; $i < $quant; $i++){
                            echo "<input type=\"button\" value=\"Botão $num\"><br>";
                            $num++;
                        }

                        echo "<br>";
                        $num = 1;
            
                        for($i = 0; $i < $quant; $i++){
                            echo  "<code>&lt;input type=\"button\" value=\"Botão $num\"&gt;</code><br>";
                            $num++;
                        }
                    }
                    else if($opselected == "radio"){
                        $num = 1;
                        for($i = 0; $i < $quant; $i++){
                            echo "<input type=\"radio\" name=\"radio\" id=\"radio$num\">";
                            echo "<label for=\"radio$num\">Radio $num</label><br>";
                            $num++;
                        }

                        echo "<br>";
                        $num = 1;
            
                        for($i = 0; $i < $quant; $i++){
                            echo "<code>&lt;input type=\"radio\" name=\"radio\" id=\"radio$num\"&gt;</code>";
                            echo "<code>&lt;label for=\"radio$num\"&gt;Radio $num&lt;/label&gt;</code><br>";
                            $num++;
                        }
                    }
                    else if($opselected == "selecao"){
                        $num = 1;
                        for($i = 0; $i < $quant; $i++){
                            echo "<input type=\"checkbox\" name=\"checkbox$num\" id=\"checkbox$num\">";
                            echo "<label for=\"checkbox$num\">Caixa de Seleção $num</label><br>";
                            $num++;
                        }
                        echo "<br>";
                        $num = 1;
            
                        for($i = 0; $i < $quant; $i++){
                            echo "<code>&lt;input type=\"checkbox\" name=\"checkbox$num\" id=\"checkbox$num\"&gt;</code>";
                            echo "<code>&lt;label for=\"checkbox$num\"&gt;Caixa de Seleção $num&lt;/label&gt;</code><br>";
                            $num++;
                        }
                    }
                    else if($opselected == "faixa"){
                        $valuefaixa = 5;
                        $num = 1;
                        for($i = 0; $i < $quant; $i++){
                            echo "<input type=\"range\" name=\"range$num\" id=\"range$num\" min=\"0\" max =\"100\" value=\"$valuefaixa\">";
                            echo "<label for=\"range$num\">Faixa $num</label><br>";
                            $valuefaixa = $valuefaixa + 5;
                            $num++;
                        }
                        echo "<br>";
            
                        $valuefaixa = 5;
                        $num = 1;
                        for($i = 0; $i < $quant; $i++){
                            echo "<code>&lt;input type=\"range\" name=\"range$num\" id=\"range$num\" min=\"0\" max=\"100\" value=\"$valuefaixa\"&gt;</code>";
                            echo "<code>&lt;label for=\"range$num\"&gt;Faixa $num&lt;/label&gt;</code><br>";
                            $valuefaixa = $valuefaixa + 5;
                            $num++;
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

        <p><a href="../index.php">Página Inicial</a></p>
    </main>

    <footer>
        <p class="copy">Estevão Ribeiro e Ítalo Augusto - &copy;2023</p>
    </footer>
</body>
</html>