<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="pag">
        <h1> Reajuste Salarial </h1>
        <hr>
        <form action="#" method="post">
                <p>
                    <label for="nome"> Nome </label>
                    <input type="text" name="nome" required>
                </p>
                <p>
                    <label for="salario"> Salário </label>
                    <input type="text" name="salario" required>
                </p>
               
                <p> <input type="submit" value="Calcular"> </p>
    
            </form>
        
            <hr>

            <div class="resultado">
                <?php
                    if(isset($_REQUEST['nome'])){
                        //entrada
                            $nome = $_REQUEST['nome'];
                            $salario = $_REQUEST['salario'];

                        //processamento
                            if($salario <= 2500){
                                $reajuste = 15;
                            }else{
                                $reajuste = 10;
                            }
                            $valorReajuste = $salario * $reajuste/100;
                            $novoSalario = $salario + $valorReajuste;
                        
                        //saída
                        echo " <p> Nome: $nome </p>";
                        echo " <p> Salário: " . number_format($salario,'2',',','.') . "</p>";    
                        echo " <p> Reajuste: $reajuste% </p>";     
                        echo " <p> Valor Reajuste: " . number_format($valorReajuste,'2',',','.') . "</p>";    
                        echo " <p> Novo Salário: " . number_format($novoSalario,'2',',','.') . "</p>";    
                    }else{
                       echo "Informe os dados para o processamento";     
                    }

                ?>
            </div>
    </div>
</body>
</html>