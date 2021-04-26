<?php

require_once('../../db/database.php');

if($_GET){
	$_SESSION['id']= $_GET['id'];
}

if($_SESSION){
	$cliente = $mysqli->query('SELECT * FROM tarea WHERE id=' .$_SESSION['id']);
    
}else{
	header('location:../index.php');
}

$persona=$cliente->fetch_array(MYSQLI_BOTH);


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Actualizar Cliente</h1>
	<form method="POST" action="actualizartarea.php">
	
		<label>Detalle: </label>
	<input type="text" name="detalle" value="<?php echo $persona['detalle']?>">
	<br>
	<label>Estado: </label>
	<input type="radio" name="estado" value="<?php echo $persona['estado']=1?>">
	<label>Completado</label>
	<input type="radio" name="estado" value="<?php echo $persona['estado']=0?>">
	<label>Incompleto</label>
	<br>
	
	<input type="submit" value="Actualizar">


	</form>
	
	
		

<a href="../"> Volver </a>
</body>
</html>