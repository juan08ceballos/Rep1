<?php
require_once('../../db/database.php');
$mysqli->query('UPDATE tarea SET detalle="'.$_POST['detalle'].'", estado="'.$_POST['estado'].'" WHERE id ='.$_SESSION['id']);
session_destroy();
header('location:formularioactualizar.php');


?>