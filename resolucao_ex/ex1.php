<?php

$vetor = array (1,2,3,4,5);

$soma = 0;

foreach($vetor as $dado)
{
$soma = $soma + $dado;
//$soma += $dado;
}

echo "o valor da soma é $soma";

?>