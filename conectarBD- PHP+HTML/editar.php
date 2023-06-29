<?php 

include("con_db.php");

/* enlazamos los 2 archivos php */

if (isset($_POST['register']))  /* preguntamos si se presionó el botón */
{
    if (strlen($_POST['query']) >= 1 && strlen($_POST['email']) >= 1) /*, preguntamos si las cajas están vacías */
     {

	    $email = trim($_POST['email']);
	    $query = trim($_POST['query']);

	    $consulta = "UPDATE datos SET consulta = '$query' WHERE email = '$email';"; /* realizamos el insert */
	    $resultado = mysqli_query($conex,$consulta); /* realizamos la conexion y ejecutamos la consulta */
	    if ($resultado) 
	    	/* si resultado es true (es decir conectó correctamente y  la consulta se realizo correctamente) */
	    {
	    	?> 
	    	<h3 class="ok">¡Editado correctamente!</h3>
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