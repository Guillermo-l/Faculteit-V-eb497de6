<?php

echo "Van welk getal wil je de faculteit weten?" .PHP_EOL;

$getal = readline("> ");
$totaal = 1;


$i = $getal;

while($i > 0){
     $totaal *= $i;
    $i--;   
}
echo "De faculteit van $getal is $totaal" .PHP_EOL;




?>