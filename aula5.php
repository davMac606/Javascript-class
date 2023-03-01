<?php

$n = 1;
$tabuada= 7;
while($n<=10){
    echo $n. "x" .$tabuada . "=" . ($n * $tabuada) . "<br>";
    $n++;


$n = 11;
$tabuada= 4; 

do{
    echo $n. "x" .$tabuada . "=" . ($n * $tabuada) . "<br>";
    $n++;

} while($n<=10);
//do while faz pelo menos uma vez

//nao declara o n pois ele é declarado dentro do proprio for
$tabuada = 7;
for($n=1;$n<=10;$n++){
    echo $n. "x " . $tabuada . "=" . ($n * $tabuada) . "<br>";
}


$n =1;
$tabuada=7;
do{
    $n++;
    if($n==7) continue;
    echo $n. "x" . $tabuada . "=" . ($n * $tabuada) . "<br>";
}while ($n<=10);



$cores = array("Branco", "verde", "azul");

foreach($cores as $cor){
    echo $cor."<br>";
}
 $valores = array(22.00, 10.00, 20.99);
 $total = 0;

 foreach($valores as $valor){
    $total = $total + $valor;
 }

$n = 1;
$tabuada = 8;
do{
    echo $n. "x" . $tabuada . "=". ($n * $tabuada) .   "<br>";

    if($n == 7)break;
    $n++;
}while($n<=10);








}
