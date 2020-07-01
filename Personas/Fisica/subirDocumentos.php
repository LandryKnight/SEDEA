

$num_archivos = count($_FILES['archivo']['name']);

for($i=0; $i<= $num_archivos; $i++){
  if(!empty($_FILES['archivo']['name'][$i])){

    $ruta_nueva  = "documentos/"."$folioImpreso"."_".$_FILES['archivo']['name'][$i];
    if(file_exists($ruta_nueva)){
      //echo "El PDF".$_FILES['archivo']['name'][$i]." ya se encuentra en el servidor<br> ";
    }else{
      $ruta_temporal = $_FILES['archivo']['tmp_name'][$i];
      move_uploaded_file($ruta_temporal, $ruta_nueva);
      echo "El PDF ".$_FILES['archivo']['name'][$i]." se subio de manera exitosa <br>" ;
    }
  }
}




<h3>Documentos admitidos solo en formato PDF.</h3> 

<div class="documentos">


<p>Selecciona la Identificación Oficial expedida por el <b>IFE o INE</b>: </p>

<input type="file" name="archivo[]"  required="required" >
	

</div>
<div class="documentos">
<p>Selecciona la  <b>CURP</b> Clave Única de Registro de Población:</p>
 <input type="file" name="archivo[]"  required="required">
</div>


<div class="documentos">
<p> Selecciona el <b>Comprobante de domicilio</b> o <br> Constancia de Residencia firmado por la autoridad competente:</p>
<input type="file" name="archivo[]" required="required" >
</div>

<div class="documentos">
<p>Selecciona el <b>Croquis</b> de bien a adquirir:</p>
 <input type="file" name="archivo[]" required="required" >
 </div>



<input type="submit" name="RequisitosG" value="Subir Documentos" class="boton">
</form>









<?php 

$num_archivos = count($_FILES['archivo']['name']);

for($i=0; $i<= $num_archivos; $i++){
	if(!empty($_FILES['archivo']['name'][$i])){

		$ruta_nueva  = "documentos/".$_FILES['archivo']['name'][$i];
		if(file_exists($ruta_nueva)){
			echo "El PDF".$_FILES['archivo']['name'][$i]." ya se encuentra en el servidor<br> ";
		}else{
			$ruta_temporal = $_FILES['archivo']['tmp_name'][$i];
			move_uploaded_file($ruta_temporal, $ruta_nueva);
			echo "El PDF ".$_FILES['archivo']['name'][$i]." se subio de manera exitosa <br>" ;
		}
	}
}

 ?>