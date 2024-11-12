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
        <h1> Comparação de Strings </h1>
        <hr>
        <form action="#" method="post">
                <p>
                    <label for="texto1"> Texto 1 </label>
                    <input type="text" name="texto1" required>
                </p>
                <p>
                    <label for="texto2"> Texto 2 </label>
                    <input type="text" name="texto2" required>
                </p>
               
                <p> <input type="submit" value="Verificar"> </p>
    
            </form>
        
            <hr>

            <div class="resultado">
                <?php
                    if(isset($_REQUEST['texto1'])){
                        //entrada
                            $texto1 = $_REQUEST['texto1'];
                            $texto2 = $_REQUEST['texto2'];

                        //processamento
                            if($texto1 == $texto2){
                                $msg = "IGUAIS";
                            }else{
                                $msg = "DIFERENTES";
                            }
                            
                        
                        //saída
                        echo " <p> Os textos digitados são $msg </p>"; 
                    }else{
                       echo "Informe os dados para o processamento";     
                    }

                ?>
            </div>
    </div>
</body>
</html>