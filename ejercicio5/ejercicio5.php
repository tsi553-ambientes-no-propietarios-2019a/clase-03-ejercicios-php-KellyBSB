<?php

$num = rand(1,100);
 echo "<strong>El numero generado es: </strong>".$num.'<br>';

 if($num == 50){
	echo "El numero es <strong>igual</strong> a 50";
 }elseif($num <50){
		echo "El numero es <strong>menor</strong> a 50";
 }else{
	echo "El numero es <strong>mayor</strong> a 50";
 }
 
?>
