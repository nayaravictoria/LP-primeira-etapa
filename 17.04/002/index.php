<?php
    date_default_timezone_set('America/Sao_Paulo'); 
    echo "<p> Hoje é dia: ";
    echo date("d/m/Y");
    echo "</p>";

    echo "<p> 10 dias depois ==> ";
    echo date("d/m/Y", strtotime("10 days"));
    echo "<br>";
    echo "10 dias antes ==> ";
    echo date("d/m/Y", strtotime("-10 days"));
    echo "</p>";

    echo "<p> 10 meses depois ==> ";
    echo date("d/m/Y", strtotime("10 months"));
    echo "<br>";
    echo "10 meses antes ==> ";
    echo date("d/m/Y", strtotime("-10 months"));
    echo "</p>";

    echo "<p> 10 anos depois ==> ";
    echo date("d/m/Y", strtotime("10 years"));
    echo "<br>";
    echo "10 anos antes ==> ";
    echo date("d/m/Y", strtotime("-10 years"));
    echo "</p>";

    echo "<p> 10 semanas depois ==> ";
    echo date("d/m/Y", strtotime("10 weeks"));
    echo "<br>";
    echo "10 semanas antes ==> ";
    echo date("d/m/Y", strtotime("-10 weeks"));
    echo "</p>";

?>