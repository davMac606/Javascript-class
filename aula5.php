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




 function calcMedia2 ($n1, $n2){
    $media2 = ($n1 + $n2)/2;
    return $media2;
 }

function soma($v1, $v2, $v3){
    $soma = $v1 + $v2 + $v3;
    echo "Soma = " . $soma;
}




// irei organizar mais tarde 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 5</title>
</head>
<body>



<?php

	include("functions.php");
	$media = calcMedia2 (9.0, 10.0);
	echo $media;

	echo "<br><br>";

	soma(1,2,3);






?>


</body>
</html>



//2

<?php




 function calcMedia2 ($n1, $n2){
    $media2 = ($n1 + $n2)/2;
    return $media2;
 }

function soma($v1, $v2, $v3){
    $soma = $v1 + $v2 + $v3;
    echo "Soma = " . $soma;
}



?>


<title>Testando menu com include</title>
</head>
<body>


	<?php include ("functions.php");?>
	//include tenta executar todo o resto que esta dentro

	//ou

    <?php require ("functions.php");?>
    //require "apresenta os erros" e para aonde houve o erro

     
 <!-- outro arqv html com <a href + o link em si> -->







 <?php 
 function calcMedia ($n1, $n2){
     $media = ($n1 + $n2);
     return $media;
 
 }
 
 
 //get possibilita a nao criação de valores pre definidos, os coloca na barra do navegador nota1=x&nota2=
 //TROCA GET PRA POST PARA QUE NAO FIQUE VISIVEL
 
 $n1 =$_POST["nota1get"];
 $n2 = $_POST["nota2get"];
 
 $media = calcMedia($n1,$n2);
 
 echo "Media:" . $media . "<br>";
 
 if ($media >= 6.0){
     echo "aprovado";
 } else{
 
     echo "reprovado";
 }
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
formulario calc nota

	</title>
</head>
<body>



<h1>Calcula média</h1>

<form action="aula5php.php" method="post">
	Nota 1: <hr>
	<input type="text" name="nota1get">

	<br><br>

	Nota 2 : <hr>
	<input type="text" name="nota2get">
    <br><br>



    <input type="submit" value="Calcular">


</form>


//troca post p request q e universal





</body>
</html>
 
 
 ?>






?>



























