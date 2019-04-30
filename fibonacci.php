<?php
$a=1;
$b=0;
for($i=0;$i<10;$i++){
	$x=$b;
    $b=$a+$b;
	echo($b." ");
	$a=$x;
}