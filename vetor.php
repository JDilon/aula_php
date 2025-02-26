<?php

$pessoa = array("maria",25,1.69, 47.8, true, false);

//usado for
for($x=0; $x < 6; $x++){

    echo "$pessoa[$x]<br>";

}

echo"<br><br>";

//usando foreach forma reduzida
foreach($pessoa as $dado)
{

    echo "$dado<br>";

}

echo"<br><br>";

//usando foreach forma completa
foreach($pessoa as $indice=>$dado)
{

    echo "$indice:$dado<br>";

}

//colocando mais um item na matriz
$pessoa[] = "castanho";

echo"<br><br>";

//usado for
for($x=0; $x < 6; $x++){

    echo "$pessoa[$x]<br>";

}

echo"<br><br>";

//usando foreach forma completa
foreach($pessoa as $indice=>$dado)
{

    echo "$indice:$dado<br>";

}

echo"<br><br>";

//usado for e corrigindo o numero de quantidades 
for($x=0; $x < count($pessoa); $x++){

    echo "$pessoa[$x]<br>";

}

echo"<br><br>";

//definindo um araay com incices nomeados
$pessoal = array("nome"=>"maria", "idade"=>25, "altura"=>1.69, "peso"=>47.8, "casado"=>true);

foreach($pessoal as $indice=>$dado){

    echo "$indice - $dado<br>";

}

//-----------------------------
//matrizes multidimencional 3x2 
//-----------------------------

$notas=array(
array("carlos", 5.5, 6.0, 7.0),
array("pedro", 10.0, 10.0, 10.0),
array("fatima", 2.5, 10.0, 10.0)
);

echo "<br><br>";

//item especifico
echo $notas[2][1];

echo "<br><br>";

//todos os itens da matriz 
for($lin=0; $lin<3; $lin++){
    echo "<br>";
    for($col=0; $col<4; $col++){
        echo $notas[$lin][$col];
        echo "<text>  -  <text/>";
    }
}

echo "<br><br>";

//usando foreach
foreach($notas as $vetor){
    foreach($vetor as $dados){
        echo "{$dados}<br>";
    }
    echo "<br>";
}

echo "<br><br>";

//recurso para programador
echo "<pre>";
var_dump($notas);
echo "</pre>";

?>