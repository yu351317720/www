<?php 
	$host ="localhost";
	$dbname ="news";
	$user ="root";
	$pwd ="";
	$charset ="utf8";

	$conn = new mysqli($host,$user,$pwd,$dbname) ;
	$conn->set_charset($charset);
	#var_dump($conn);
 ?>