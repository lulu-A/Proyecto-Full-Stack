<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="header"> <a href="index.php">CARGAR CONSULTA</a> <a href="paginaMostrar.php"> VER CONSULTAS </a> <a href="paginaEditar.php"> Editar Consulta </a>
<a href="../index.html"> VOLVER AL INICIO </a></div>
       <! incluimos registrar phpcreamos form > 
    <form method="post">
    	<h1>¡Borrar Consulta!</h1>
    	<input type="email" name="email" placeholder="Email">
       
    	<input type="submit" name="register" value="Borrar">
    </form>

       <! incluimos registrar php>
        <?php 
        include("borrar.php");
        ?>
</body>
</html>