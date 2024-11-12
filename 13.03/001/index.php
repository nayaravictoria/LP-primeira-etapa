<?php
    //entrada
    $valor = $_REQUEST['valor'] ?? 0;

    //processamento
    if ($valor <= 50){
        $perc = 0;
    }else if($valor <= 100){
        $perc = 5;
    }
    else{
        $perc = 10;
    }
    $desconto = $valor * $perc/100;
    $pagamento = $valor - $desconto;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas ETEOT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="pag">
        <h1> Formulário de Vendas </h1>
        <hr>
        <h4> Compras até R$ 50,00 - sem desconto</h4>
        <h4> Compras entre R$ 50,00 e R$ 100,00 - 5% de desconto</h4>
        <h4> Compras acima R$ 100,00 - 10% de desconto </h4>
        <hr>
        <form action="#" method="post">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" value="<?=$valor?>" onclick="this.select()" required>
            <input type="submit" value="Calcular Desconto">
        </form>
        <hr>
        <div class="resultado">
            <?php   
                print "<p> <b> Valor da Compra: </b> R$ " .number_format($valor,2,",",".") . " </p>";
                print "<p> <b> Desconto em %: </b> $perc% </p>";
                print "<p> <b> Desconto em Reais: </b> R$ " . number_format($desconto,2,",",".") . " </p>";
                print "<p> <b> Valor a Pagar: </b> R$ " . number_format($pagamento,2,",",".") . " </p>";
            ?>
        </div>
    </div>
</body>
</html>