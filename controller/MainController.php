<?php

require('components/AppHelper.php');

class MainController extends AppHelper{
	
    private $allowedExtensions = array('sh', 'zsh', 'bash');

	public function __construct() {
	}


	public function actionIndex() {
		//$this->render('index.php');
	}

	public function getScript($filename) {

		$filepath = parent::filePath($filename);

		if( self::isValidExtension($filename) ) {
	
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

	public function saveScript($filename,$content){

		$filepath = parent::filePath($filename);

		if(file_exists($filepath)) {
            
			$write_file = false;

            if(file_put_contents($filepath,$content)){
            	$write_file = true;
            }

            return $write_file ?: false;
            
		} 

	}

	public function runScript($filename,$content){

		$filepath = parent::filePath($filename);

		if(file_exists($filepath)) {
            
			$exec_file = false;

            if(shell_exec($content)){
            	$exec_file = true;
            }

            return $exec_file ?: (int)false;
            
		} 

	}

	public function isValidExtension($filename) {
		$fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
		return in_array($fileExtension, $this->allowedExtensions);
	}


}