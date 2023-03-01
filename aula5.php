<?php

$n = 1;
$tabuada= 7;
while($n<=10){
    echo $n. "x" .$tabuada . "=" . ($n * $tabuada) . "<br>";
    $n++;

}

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



//funções 
 function calcMedia($n1, $n2) {
    $media = ($n1+$n2)/2;
    return $media;
    // nao necessariamente precisa do return , return $media; so se quiser usar o valor fora da função 
 }

 $media = calcMedia(7.0 , 9.5);

 echo "Média =". $media . "<br>";


 if($media >= 6.0){
    echo "<span id = 'aprovado'>Aprovado!</span>";

 }else{
   echo "<span id = 'reprovado'>Reprovado!</span>";
 }





?>
