<?php 
	session_start();
	session_destroy();
	header('Location:/OnlineDataBase/index.php');
?>