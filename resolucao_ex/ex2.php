<?php

$vet = array(10,5,7);

$auxiliar = 0;

if($vet[0] > $vet[1])
{
	$auxiliar = $vet[1];
	$vet[1] = $vet[0];
	$vet[0] = $auxiliar;
}
if($vet[1] > $vet[2])
{
	$auxiliar = $vet[2];
	$vet[2] = $vet[1];
	$vet[1] = $auxiliar;
}
if($vet[0] > $vet[2])
{
	$auxiliar = $vet[2];
	$vet[2] = $vet[0];
	$vet[0] = $vet[2];
}

foreach($vet as $dado)
{
	echo "$dado<br>";
}

$auxiliar = 0;
for($x=0; $x < count($vet);$x++)
{
	for($y=0; $y < count($vet) -1; $y++)
	{
		if($vet[$y] > $vet[$y +1])
		{
			$auxiliar = $vet[$y];
			$vet[$y]= $vet [$y+1];
			$vet[$y+1] = $auxiliar;
		}
	}
}	

foreach($vet as $dado)
{
	echo "$dado<br>";
}

	
?>