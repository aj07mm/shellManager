<?php
	class AppController{

		const VIEW_PATH = 'view';

		public function __construct(){
			$this->getOS();
		}

		public function render($viewname,$params){

			foreach($params as $key => $value){
				$$key = $value;	
			}

			require(self::VIEW_PATH.'/'.$viewname.'.php');

		}

		private function getOS() {
			
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
			    throw new Exception('shellManager requires *nix server!');
			}

		}

	}