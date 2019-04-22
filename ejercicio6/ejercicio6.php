<?php

function vocales($palabra){

$cantidad= strlen ($palabra);
echo 'La cantidad de letras es: '.$cantidad;

$a='a';$e='e';$i='i';$o='o';$u='u';
$com=strpos($palabra,$a);
$com2=strpos($palabra,$e);
$com3=strpos($palabra,$i);
$com4=strpos($palabra,$o);
$com5=strpos($palabra,$u);


if($com==true && $com2==true && $com3==true && $com4==true && $com5==true ) {

echo '<br>'.'  tiene las cinco vocales';

}else{
	echo '<br>'.' no Tiene las cinco vocales';
}


}



$palabra= "bebe";
vocales($palabra);







?>

