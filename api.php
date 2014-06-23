<?php
	require('controller/MainController.php');

	$main = new MainController;
	$foo = file_get_contents("php://input");
	echo $main->getScript(json_decode($foo)->filename);	
	
	


	