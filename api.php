<?php
	require('controller/MainController.php');

	$main = new MainController;
	$foo = file_get_contents("php://input");
	$foo = json_decode($foo);

	switch($foo->action){
		case 'getScript':
			echo $main->getScript($foo->filename);	
		break;

		case 'saveScript':
			echo $main->saveScript($foo->filename,$foo->content);	
		break;
	}
	
	


	