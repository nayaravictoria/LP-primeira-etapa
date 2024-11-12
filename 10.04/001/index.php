<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes em PHP</title>
</head>
<body>
    <h1> Funções em PHP </h1>
    <hr>
    <?php
        echo "Sorteio ==> ";
        echo rand(0,100);

        echo "<hr>";

        $A = rand(0,100);
        $B = rand(0,100);
        $C = rand(0,100);
        $D = rand(0,100);

        echo "$A - $B - $C - $D";
        echo "<hr>";
        echo "Menor ==> ";
        echo min($A,$B,$C,$D);
        echo "<hr>";
        echo "Maior ==> ";
        echo max($A,$B,$C,$D);


    ?>
</body>
</html>