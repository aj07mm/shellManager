<?php

require('components/AppHelper.php');
require_once('model/Scripts.php');

class MainController extends AppHelper {
	
	public function __construct() {
	}


	public function actionIndex() {
		//$this->render('index.php');
	}

	public function getScript($filename) {
        $script = new Scripts();

		$filepath = parent::filePath($filename);

		if( $script::isValidExtension($filename) ) {
	
			if(file_exists($filepath)) {
	            $fh = fopen($filepath, "r");
	            $data = fread($fh, filesize($filepath));
	            fclose($fh);
	            return $data;
			} 

		} else {
			return false;
		}	
	}

	public function saveScript($filename,$content) {

		$filepath = parent::filePath($filename);

		if(file_exists($filepath)) {
            
			$write_file = false;

            if(file_put_contents($filepath,$content)) {
            	$write_file = true;
            }

            return $write_file ?: false;
            
		} 

	}

	public function runScript($filename,$content){

		$filepath = parent::filePath($filename);

		if(file_exists($filepath)) {
            
			$exec_file = false;

            if($result = shell_exec($content)){
            	return $result;
            }

            return false;	
            
		} 

	}

}