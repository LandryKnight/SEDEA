<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass ='';
	$dbname ='sedea';

	$connection = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($connection-> connect_error) die("Fatal Erorr");

	function queryMySql($query){
	global $connection;
	
	$result = $connection -> query($query);
	if(!$result) die("No Connection");
	return $result; 
	
	}

 	function sanitizeString($var){
	global $connection;
	
 
    $var = strip_tags($var);
    $var = htmlentities($var);
    if(get_magic_quotes_gpc())
    $var = stripcslashes($var);
    return $connection -> real_escape_string($var);
	}



 ?>