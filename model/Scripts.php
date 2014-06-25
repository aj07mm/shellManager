<?php

class Scripts {
	
	private $allowedExtensions = array('sh', 'zsh', 'bash');

	public function __construct(){}

	public function listAllScripts() {
		$files = scandir('shscripts',SCANDIR_SORT_DESCENDING);
		$validFiles = array();

		foreach ($files as $value) {
			if( self::isValidExtension($value) ) {
				array_push($validFiles, $value);
			}
		}

		return $validFiles;	
	}

	public function isValidExtension($filename) {
		$fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
		return in_array($fileExtension, $this->allowedExtensions);
	}	
}