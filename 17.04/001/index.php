<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Trabalhando com datas</title>
</head>
<body>
    <b> Olá! Hoje é dia: </b>
    <?php
       date_default_timezone_set('America/Sao_Paulo'); 
       echo date("d/M/Y");
       echo "<b> e são:  </b>";
       echo date("H:i:s");
       echo " - " . date_default_timezone_get(); 
       echo "<hr>";

       date_default_timezone_set('Australia/Darwin'); 
       echo date("d/M/Y");
       echo "<b> e são:  </b>";
       echo date("h:i:s a");
       echo " - " . date_default_timezone_get();
       echo "<hr>";

       /*
            date("d/M/Y");
            D - dia da Semana
            d - dia do mês
            m - mês em número
            M - mês por extenso
            y - ano com 2 dígitos
            Y - ano com 4 digitos

            date("h:i:s a");
            h - 12 horas
            H - 24 horas
            i - minutos
            s- segundos
            a - am/pm
       */

       echo "<p> Rio de Janeiro, " . date("d") . " de " . date ("M") . " de " . date("Y") . ".</p>";
       echo "<hr>";

      

    ?>
</body>
</html>