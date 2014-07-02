<?php
	class AppController {

		const VIEW_PATH = 'view';

		public function __construct(){
			$this->getOS();
            $this->checkFuncDeps();
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

        /**
         * Verifica funções nativas necessárias ( se elas estão habilitadas no servidor )
         */
        private function checkFuncDeps() {
            if(!function_exists('shell_exec')) {
                throw new Exception('shellManager requires a "shell_exec" function enable on server!');
            }
        }

	}