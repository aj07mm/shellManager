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

            if(file_put_contents($filepath, $content, LOCK_EX)) {
            	$write_file = true;
            }

            return $write_file ?: false;
            
		} else {
            return file_put_contents($filepath, $content, LOCK_EX) ? true : false;
        }

	}

	public function runScript($filename){

		$filepath = parent::filePath($filename);

		if(file_exists($filepath)) {
            
            try {

                $result = shell_exec('sh ' . $filepath);
                if($result==NULL) {
                    return 'Não foi possível executar o script, verifique a sintaxe';
                } else {
                    return $result;
                }

            } catch (Exception $e) {
                return $e->getMessage();
            }

		} else {
            return 'Arquivo ' . $filepath . ' não existe';
        }

	}

}