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
        <h1> Par ou Ímpar </h1>
        <hr>
        <form action="#" method="post">
                <p>
                    <label for="num"> Número </label>
                    <input type="number" name="numero" required step="1.0">
                </p>
    
                <p> <input type="submit" value="Verificar"> </p>
    
            </form>
        
            <hr>

            <div class="resultado">
                <?php
                    if(isset($_REQUEST['numero'])){
                        //entrada
                            $numero = $_REQUEST['numero'];
                            
                        //processamento
                        /*
                            if($numero % 2 == 0){
                                $msg = "par";
                            }else{
                                $msg = "ímpar";
                            }
                        */
                            //operadore ternário
                            ($numero % 2 == 0)?($msg = "par"):($msg = "ímpar");
                            
                        
                        //saída
                        echo " <p> $numero é $msg </p>"; 
                    }else{
                       echo "Informe os dados para o processamento";     
                    }

                ?>
            </div>
    </div>
</body>
</html>