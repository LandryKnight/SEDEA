<?php 

	$dbhost = 	'localhost';
	$dbuser = 	'root';
	$dbpass =	'';
	$dbname =	'sedeapf';

	$connection = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($connection-> connect_error) die("Fatal Erorr");

	#No Connection to insert -> puede ser una llave primaria duplicada o algo mal en queryMySql
	function queryMySql($query){
	global $connection;
	
	$result = $connection -> query($query);
	if(!$result) die("No Connection to insert");
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

	

	function destroySession(){
		$_SESSION = arrat();
		if(session_id() != "" || isset($_COOKIE[session_name()]))
			setcookie(session_name(), '',time()-2592000,'/');
		session_destroy();
	}


 ?>