<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
<div class="pag">
        <h1> Cálculo de Salário Família </h1>
        <hr>
        <form action="#" method="post">
                <p>
                    <label for="num"> Nome Completo </label>
                    <input type="text" name="nome" value="<?php echo $nome?>" required>
                </p>
                <p>
                    <label for="num"> Salario </label>
                    <input type="number" name="salario" value="<?=$salario?>" required>
                </p>
                <p>
                    <label for="filhos"> Filhos </label>
                    <input type="number" name="filhos" value="<?=$filhos?>" required>
                </p>
    
                <p> <input type="submit" value="Verificar"> </p>
    
            </form>
        
            <hr>

            <div class="resultado">
                <?php
                    if(isset($_REQUEST['nome'])){
                        //entrada
                            $nome = $_REQUEST['nome'];
                            $salario = $_REQUEST['salario'];
                            $filhos = $_REQUEST['filhos'];
                            
                        //processamento
                        $salarioFamilia = $salario * 0.1 * $filhos;
                        $novoSalario = $salario + $salarioFamilia;
                        $partes = explode(" ", $nome);  
                        $tot = count($partes)-1;  
                        $ultimoNome = $partes[$tot];
                        $digitos = strlen($nome);

                        //saída
                        date_default_timezone_set('America/Sao_Paulo'); 
                        echo "<p> Hoje é dia: " . date("d/m/Y") . "</p>";
                     
                        echo "<p> Funcionário == > " . strtoupper($ultimoNome) . ", " . $partes[0] . "</p>"; 
                        echo "<p> Nome Completo == > $nome </p>";
                        echo " <p> Salario  ==> R$ ". number_format($salario,2,',','.') . "</p>"; 
                        echo " <p> Quantidade de Filhos ==> $filhos";
                        echo " <p> Salario Família  ==> R$ ". number_format($salarioFamilia,2,',','.') . "</p>";
                        echo " <p> Novo Sálario  ==> R$ ". number_format($novoSalario,2,',','.') . "</p>";
                        echo "<hr>";
                        echo "<p> Quantidade de Dígitos: $digitos </p>";
                        echo "<p> Quantidade de Nomes: " . $tot+1 . " </p>";
                        echo "<hr>";
                    }else{
                       echo "Informe os dados para o processamento";     
                    }

                ?>
            </div>
    </div>
</body>
</html>