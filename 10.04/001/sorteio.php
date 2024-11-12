<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes em PHP</title>
</head>
<body>
    <h1> Sorteio </h1>
    <mark> Escolha um numero de 1 a 10</mark>
    <hr>
    <form action="#" method="post">
        <label for="num">Numero escolhido</label>
        <input type="number" name="num" required autofocus>
        <input type="submit" value="apostar">
    </form>
    <hr>
    <?php
        if(isset($_POST['num'])){
            //entrada
            $num = $_REQUEST['num'] ?? 0;
    
            //processamento
            $sorteio = rand(0,10);
            if($num == $sorteio){
                $msg = "Parabéns você Acertou!";
            }
            else{
                $msg = "Ah que pena! Não foi desta vez! Tente novamente";
            }
    
            //saída
            echo "<p> Aposta ==> $num </p>";
            echo "<p> O numero sorteado ==> $sorteio </p>";
            echo "<hr>";
            echo "<p> $msg </p> ";
            echo "<hr>";
        }

    ?>
   
</body>
</html>