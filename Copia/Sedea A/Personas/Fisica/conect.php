<?php 


class funcion {
public function conectar (){

	$hostname = 'localhost';
	$user = 'root';
	$password ='';
	$database ='sedea';

	$Conexion = new mysqli($hostname,$user,$password,$database);

	if($Conexion -> connect_errno > 0){
		echo $Conexion -> error, "<br>";
	}else{
		#echo "Conexion Exitosa"
	}
	return $Conexion;

	
}

}
 ?>