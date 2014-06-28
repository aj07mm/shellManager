<?php
	require('controller/MainController.php');

	$main = new MainController;
	$file = file_get_contents("php://input");
	$file = json_decode($file);

	switch($file->action){
		case 'getScript':
			echo $main->getScript($file->filename);
		break;

		case 'saveScript':
			echo (int)$main->saveScript($file->filename,$file->content);
		break;

		case 'runScript':
			echo $main->runScript($file->filename,$file->content);
		break;
	}
	
	


	