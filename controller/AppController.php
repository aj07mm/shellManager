<?php
require('Messages.php');

class AppController {

		const VIEW_PATH = 'view';

		public function __construct(){
            $this->getOS();
            $this->checkFuncDeps();
            $this->folderIsWritable();
		}

		public function render($viewname,$params){

			foreach($params as $key => $value){
				$$key = $value;	
			}

			require(self::VIEW_PATH.'/'.$viewname.'.php');

		}


        /**
         * Checa o diretório dos scripts ( escrita e se é um diretório )
         * @throws Exception
         */
        private function folderIsWritable() {
            $script = new Scripts();
            if(!is_dir($script::SCRIPTS_FOLDER) || !is_writable($script::SCRIPTS_FOLDER)) throw new Exception(DIR_SCRIPTS_WRITE_ERROR);
        }

        /**
         * Verifica se é um SO válido
         * @throws Exception
         */
        private function getOS() {
			
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
			    throw new Exception(INVALID_OS);
			}

		}

        /**
         * Verifica funções nativas necessárias ( se elas estão habilitadas no servidor )
         * @throws Exception
         */
        private function checkFuncDeps() {
            if(!function_exists('shell_exec')) {
                throw new Exception(FUNC_EXEC_NOT_ALLOWED);
            }
        }

}