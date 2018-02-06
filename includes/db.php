<?php


	$host = 'localhost';
	$user = 'root';
	$pass = '';

	$connection = mysqli_connect($host,$user,$pass);
	if(!$connection){
		die('There is NO connection').mysqli_error($connection);
	}
	mysqli_select_db($connection , 'dtumess');


?>