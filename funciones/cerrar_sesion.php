<?php
// Destruimos la sesion 
session_start();
session_destroy();
$_SESSION = array();
header("Location: ../index.php");
die();
?>