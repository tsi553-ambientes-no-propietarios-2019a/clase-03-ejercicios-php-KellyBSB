<?php
echo 'for';

for($i=1;$i <=12;$i=$i+2)
	echo '<br>'.$i.'* 2 ='.$i*2;
echo '<br>'.'While';
$i=1;
while( $i<=12 ){

echo '<br>'.$i.'* 2 ='.$i*2;
$i=$i+2;
}

echo '<br>'.'Do While';
$i=1;
do{
echo '<br>'.$i.'* 2 ='.$i*2;
$i=$i+2;
}while($i<=12);

	
?>