<?php

class MainController{
	
	const SCRIPTS_PATH = "shscripts";

	public function __construct(){
	}

	public function actionIndex(){
		//$this->render('index.php');
	}

	public function getScript($filename) {

		$filepath = self::SCRIPTS_PATH.'/'.$filename;

		if(file_exists($filepath)) {
            $fh = fopen($filepath, "r");
            $data = fread($fh, filesize($filepath));
            fclose($fh);
            echo $data;
		} else
			echo false;
	}


}