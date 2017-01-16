<?php
	
	require("../model/login.php");
	
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$login = new Login($usuario,$senha);

?>