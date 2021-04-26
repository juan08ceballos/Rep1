<?php
require_once('../../db/database.php');
$mysqli->query('DELETE FROM tarea WHERE id ='.$_GET['id']);
header('location:../index.php');


?>