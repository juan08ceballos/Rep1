<?php
require_once ('../db/database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Lista de tareas</h1>
<br>
    <a href="crear/formulariotarea.php">Crear Tarea</a>
<br>
<table border="1">
	<tr>
		
		<td>Detalle</td>
		<td>Estado</td>
		<td>Actualizar</td>
		<td>Eliminar</td>
	</tr>

<?php

$cliente = $mysqli->query("SELECT * FROM tarea");
$persona = $cliente->fetch_array(MYSQLI_BOTH);




while ($persona != NULL) {	
	
	

	echo "<tr>";
	
	echo "<td>".$persona['detalle']."</td>";
	
	?>
	<td><input type="text" value="<?php if ($persona['estado']) {
		echo "Completado";
	} else {
		echo "Incompleto";
	}
	?>"></td>
	<?php	
	
	echo '<td><a href="actualizar/formularioactualizar.php?id=' .$persona['id'].'">Actualizar</a></td>';
	echo '<td><a href="eliminar/eliminartarea.php?id=' .$persona['id'].'">Eliminar</a></td>';
	echo "</tr>";
	
	$persona=$cliente->fetch_array(MYSQLI_BOTH);
	
	
}


?>	
</table>
<a href="../">Regresar</a>
</body>
</html>