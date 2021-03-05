<?php

     $reais =  $_GET["valorReais"];
     $unidadeMonetaria =  $_GET["unidadeMonetaria"];

     $converterDolar =  $reais / 5.41;
     $converterEuro =  $reais / 6.57;

    if ($unidadeMonetaria == "Dolar"){
        echo "<h1>Valor total em $unidadeMonetaria: $ $converterDolar</h1>";
    }else{
        echo "<h1>Valor total em $unidadeMonetaria: € $converterEuro</h1>";
    }