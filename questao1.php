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
</body>
</html>