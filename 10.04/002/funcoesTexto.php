<?php

    echo "<h2 style='text-align:center'> Funções para string(Textos) </h2>";
    echo "<hr>";

    $nome = "Seu Nome Completo";

    echo "<p> <b> Normal: </b>";
    echo $nome;
    echo "</p>";

    echo "<p> <b> Maiúsculo: </b>";
    echo strtoupper($nome);
    echo "</p>";

    echo "<p> <b> Minúsculo: </b>";
    echo strtolower($nome);
    echo "</p>";

    echo "<p> <b> Invertido: </b>";
    echo strrev($nome);
    echo "</p>";

    echo "<p> <b> Quantidade de Dígitos: </b>";
    echo strlen($nome);
    echo "</p>";

    echo "<p> <b> Troca de Caracteres: </b>";
    echo strtr($nome,"o","_");
    echo "</p>";

    echo "<p> <b> Partes do Texto: </b>";
    echo substr($nome,9,8);
    echo "</p>";

    echo "<p> <b> Separando Textos: </b>";
    $partes = explode(" ",$nome);
    $tot = count($partes)-1;
    echo "$partes[0] $partes[$tot]";
    echo "</p>";

    echo "<p> <b> Remover espaços a Esquerda e a Direira: </b>";
    echo trim($nome);
    echo "</p>";

    echo "<p> <b> Remover espaços a Esquerda: </b>";
    echo ltrim($nome);
    echo "</p>";

    echo "<p> <b> Remover espaços a Direira: </b>";
    echo rtrim($nome);
    echo "</p>";


?>