<?php

class MainController{
	
	const SCRIPTS_PATH = "shscripts";

	public function __construct(){
		echo self::SCRIPTS_PATH;
	}

	public function actionIndex(){

		//$this->render('index.php');
	}

	public function getScript(){

		$filename = $_REQUEST['filename'];
		$filepath = self::SCRIPTS_PATH.'/'.$filename;
		if(file_exists($filepath)){
			echo readfile($filepath);
		}else
			echo false;
	}


}