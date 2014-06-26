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
		return 'foo';

	}

	public function isValidExtension($filename) {
		$fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
		return in_array($fileExtension, $this->allowedExtensions);
	}


}