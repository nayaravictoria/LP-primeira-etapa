<?php

    //entrada
    $salario = $_REQUEST['salario'] ?? 0;
    
    //processamento
    if($salario <= 1710.78){
        $pd = 0;
        $perc = 0;
    }else if($salario <= 2563.91){
        $pd = 128.31;
        $perc = 7.5;
    }else if($salario <= 3418.59){
        $pd = 320.60;
        $perc = 15;
    }else if($salario <= 4271.59){
        $pd = 577;
        $perc = 22.5;
    }else{
        $pd = 790.78;
        $perc = 27.5;
    }

    $valorPerc = $salario * $perc/100;
    $ir = $valorPerc - $pd;
    $salarioFinal = $salario - $ir;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Imposto de Renda </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="pag">
        <h1> Calculo de Imposto de Renda </h1>
        <hr>
        <h4>Salarios até R$ 1.710,78 - sem desconto </h4>
        <h4>Salarios entre R$ 1.710,79 e R$ 2.563,91 - 7,5% de desconto - R$ 128,31 (parcela a Deduzir)  </h4>
        <h4>Salarios entre R$ 2.563,92 e R$ 3.418,59 - 15% de desconto - R$ 320,60 (parcela a Deduzir)  </h4>
        <h4>Salarios entre R$ 3.418,60 e R$ 4.271,59 - 22,5% de desconto - R$ 577,00 (parcela a Deduzir)  </h4>
        <h4>Salarios acima de R$ 4.271,60 - 27,5% de desconto - R$ 790,00 (parcela a Deduzir)  </h4>
        <hr>

        <form action="#" method="post">
            <label for="salario"> Salário </label>
            <input type="text" name="salario" value="<?=$salario?>" onclick="this.select()" required>
            <input type="submit" value="Calcular IR">
        </form>
        <hr>
        <div class="resultado">
            <?php
                echo "<p> Salario Bruto: R$ " . number_format($salario,2,",",".") . "</p>";
                echo "<p> Percentual: $perc% </p> ";
                echo "<p> Percentual em Reais: R$ " . number_format($valorPerc,2,",",".")  . "</p>";
                echo "<p> Parcela a Deduzir: R$ " . number_format($pd,2,",",".")  . "</p>";
                echo "<p> Valor do IR: R$ " . number_format($ir,2,",",".")  . "</p>";
                echo "<p> Salario Final: R$ " . number_format($salarioFinal,2,",",".")  . "</p>";
            ?>
        </div>
        
        
    </div>
</body>
</html>