<?php
	
	class AppHelper{

		const SCRIPTS_PATH = "shscripts";

		public function filePath($filename){
			return self::SCRIPTS_PATH.'/'.$filename;
		}

	}