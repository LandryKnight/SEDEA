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
	if(!$result) die("Fatal Error");
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


/* 



class funcion {
public function conectar (){

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass ='';
	$dbname ='sedea';

	$Conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

	if($Conexion -> connect_errno > 0){
		echo $Conexion -> error, "<br>";
		
		}else{
		#echo "Conexion Exitosa";
		}
	return $Conexion;

		}
	}

function queryMySql($query){
	global $Conexion;
	$result = $Conexion -> query($query);
	if(!$result) die("Fatal Error");
	return $result; 
}

function sanitizeString($var){
	
  if(get_magic_quotes_gpc())
    $var = stripcslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
     return $var;
}

*/

 ?>