<?php 
//there are three maina arguments
	$time = time();
	$value =  'raheem';
	setcookie('name', $value, $time - 3600);
 ?>