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
        <h1> Peso Ideal </h1>
        <hr>
        <form action="#" method="post">
                <p>
                    <label for="altura"> Altura </label>
                    <input type="number" name="altura" value="<?=$altura?>" onclick="this.select()" required step="0.1">
                </p>
                <p>
                    <label for="peso"> Peso </label>
                    <input type="number" name="peso" value="<?=$peso?>" onclick="this.select()" required step="0.1">
                </p>
                <p>
                    <label for="sexo"> Sexo </label>
                    <select name="sexo" id="sexo">
                        <option value="masculino"> Masculino </option>
                        <option value="feminino"> Feminino </option>
                    </select>
                </p>
                <p> <input type="submit" value="Calcular"> </p>
    
            </form>
        
            <hr>

            <div class="resultado">
                <?php
                    if(isset($_REQUEST['altura'])){
                        //entrada
                        $altura = $_REQUEST['altura'];
                        $peso = $_REQUEST['peso'];
                        $sexo = $_REQUEST['sexo'];

                        //processamento
                        if($sexo == "Masculino"){
                            $pesoIdeal = round($altura * 72.7 - 58);    
                        }
                        else{
                            $pesoIdeal = round($altura * 62.1 - 44.7);
                        }

                        if ($peso > $pesoIdeal){
                            $msg = "Você esta acima do Peso";
                        }else if($peso < $pesoIdeal){
                            $msg = "Você esta abaixo do Peso";
                        }else{
                            $msg = "Você está com o peso ideal";
                        }
                        //saída
                        echo "
                            <p> Sexo: $sexo </p>
                            <p> Altura: $altura </p>
                            <p> Peso: $peso </p>
                            <p> Peso Ideal: $pesoIdeal </p>
                            <p> Mensagem: $msg </p>
                        ";

                    }else{
                       echo "Informe os dados para o processamento";     
                    }

                ?>
            </div>
    </div>
</body>
</html>