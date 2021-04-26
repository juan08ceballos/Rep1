<?php
require_once("../../db/database.php");

$mysqli->query('INSERT INTO tarea (estado, detalle) VALUES("0","'.$_POST['detalle'].'")');

header('location:../index.php');
?>