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
            
		}else{

			return file_put_contents($filepath.'.sh',$content) ? true : false;
			
		}

	}

	public function runScript($filename,$content){

        try {

            if($result = shell_exec($content)){
	       		return $result;
	        }else{
	        	return 'Não foi possível executar o script, verifique a sintaxe';
	        }

        } catch (Exception $e) {
            return $e->getMessage();
        }

	}

}