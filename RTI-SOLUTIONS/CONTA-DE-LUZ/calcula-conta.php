<?php

se(! isset($_GET["nomeCliente"]) 
|| ! isset($_GET["endereco"]) 
|| ! isset($_GET["consumo"])){

 
   cabeçalho ("localização: índice.php");

}

 $nomeCliente =  $_GET["nomeCliente"];
 $endereco =  $_GET["endereco"];
 $consumo =  $_GET["consumo"];

 $consumoTotal = 0;

se ($consumo > 120){
     $consumoTotal =  $consumo * 0.42;
}
Mais{
     $consumoTotal =  $consumo * 0.32;
}

?>
<! DOCTYPE html>
<html lang="en">
<Cabeça>
  <meta charset="UTF-8">
  <meta nome="viewport" conteúdo="largura=largura do dispositivo, escala inicial=1,0">
  <link rel="stylesheet" href=".. /styles-global.css" />
  <título>Calcula Conta</título>
</Cabeça>
<Corpo>
    <h1>Nome do Cliente: <em> <?=$nomeCliente?> </em></h1>
    <h1>Endereço: <em> <?=$endereco?> </em></h1>
    <h1>Total a pagar: R$ <em> <?=number_format($consumoTotal, 2, ", ". ?></em> </h1>
  <!-- Se o valor do pedágio para maior que 100, exibir em vermelho -->
  <?php
    se($consumo > 120){
      echo "<h1>Consumo: <em style='cor: vermelho'> $consumo</em> kWh </h1>";
    }Mais{
      echo "<h1>Consumo: <em style='cor: vermelho'> $consumo</em> kWh </h1>";
    }
  ?>
  
</Corpo>
</Html>