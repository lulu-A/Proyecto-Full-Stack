<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="header"> <a href="paginaBorrar.php">BORRAR CONSULTA</a> <a href="paginaMostrar.php"> VER CONSULTAS </a>
<a href="../index.html"> VOLVER AL INICIO </a></div>
       <! incluimos registrar phpcreamos form > 
    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <textarea name="query" placeholder="Su consulta"></textarea>
    	<input type="submit" name="register">
    </form>

       <! incluimos registrar php>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>