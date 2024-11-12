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
        <h1> Consulta Pesqueiro </h1>
        <hr>
        <form action="#" method="post">
                <p>
                    <label for="nome"> Nome Pescador </label>
                    <input type="text" name="nome" required>
                </p>

                <p>
                    <label for="quant"> Quantidade em Kg Pescado </label>
                    <input type="number" name="quant" required step="0.1">
                </p>
    
                <p> <input type="submit" value="Verificar"> </p>
    
            </form>
        
            <hr>

            <div class="resultado">
                <?php
                    if(isset($_REQUEST['nome'])){
                        //entrada
                            $nome = $_REQUEST['nome'];
                            $quant = $_REQUEST['quant'];
                            $excesso = 0;
                            $multa = 0;
                            
                        //processamento
                            if($quant > 50){
                                $excesso = $quant - 50;
                                $msg = "$nome, você pescou $excesso KG acima do peso permitido e terá que pagar uma multa de R$ " . number_format($multa,2,",",".") . " pelo excesso pescado.";
                            }else{
                                $msg = "$nome, a sua quantidade pescada esta dentro do permitido pelo pesquiro. Obrigada pela sua visita.";
                            }
                            $multa = $excesso * 4;
                            
                        //saída
                        echo " <p>Pescador: $nome </p>"; 
                        echo " <p> Quantidade Pescada: $quant kg </p>"; 
                        echo " <p> Quantidade Permitida: 50 kg </p>"; 
                        echo " <p> Quantidade Excedida: $excesso kg </p>"; 
                        echo " <p> Multa: R$ " . number_format($multa,2,',','.') . " - R$ 4,00 por Kg excedente</p>"; 
                    }else{
                       echo "Informe os dados para o processamento";     
                    }

                ?>
            </div>
    </div>
</body>
</html>