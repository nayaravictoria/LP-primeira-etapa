<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="pag" >
        <h1> VÔO 2023 - Consulta de Classe </h1>
        <hr>
        <form name="form" method="post" action="#">
            <input type="text" name="poltrona" required>
            <input type="submit" value="Verificar">
        </form>

        <div class="resultado">
            <?php
                //entrada
                $poltrona = $_REQUEST['poltrona'] ?? 0;

                //processamento
                if($poltrona<=0 || $poltrona > 120){
                    $classe = "Poltrona Inexistente";
                    $cor = "black";
                }
                else if($poltrona <= 20){
                    $classe = "Classe Executiva";
                    $cor = "blue";
                }
                else{
                    $classe = "Classe Econômica";
                    $cor = "red";
                }

                //saída
                if ($poltrona == 0){
                    echo "<p> Informe o número da Poltrona</p> ";
                }
                else{
                    echo "<p> Poltrona $poltrona - <span style='color: $cor'> $classe </span> </p> ";
                }
            ?>
        </div>
    </div>
    
  </body>
</body>
</html>