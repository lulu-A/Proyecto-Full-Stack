<?php 

include("con_db.php");

/* enlazamos los 2 archivos php */

if (isset($_POST['register']))  /* preguntamos si se presionó el botón */
{
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) /*, preguntamos si las cajas están vacías */
     {
	    $name = trim($_POST['name']); /* cargamos las variables */
	    $email = trim($_POST['email']);
	    $query = trim($_POST['query']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg, consulta,provincia,departamento,localidad) VALUES ('$name','$email','$fechareg','$query',3,1,1)"; /* realizamos el insert */
	    $resultado = mysqli_query($conex,$consulta); /* realizamos la conexion y ejecutamos la consulta */
	    if ($resultado) 
	    	/* si resultado es true (es decir conectó correctamente y  la consulta se realizo correctamente) */
	    {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>