<?php
    require('components/ScriptHelper.php');

    //TODO implementar singleton
class Scripts extends ScriptHelper {

    private $totalValidScripts;

	public function __construct() { }

	public function listAllScripts() {
		$files = scandir(parent::getFolderScripts(), SCANDIR_SORT_DESCENDING);
		$validFiles = array();

		foreach ($files as $value) {
			if( parent::isValidExtension($value) ) {
				array_push($validFiles, $value);
			}
		}

        //TODO manter aqui ou utilizar o getQuantityValidScripts()  ?
        $this->totalValidScripts = sizeof($validFiles);

		return $validFiles;	
	}

    public function getQuantityValidScripts() {
        return $this->totalValidScripts;
    }

    /*
	public function getQuantityValidScripts() {
		$files = scandir(parent::getFolderScripts(), SCANDIR_SORT_DESCENDING);
		$validFiles = array();

		foreach ($files as $value) {
			if( self::isValidExtension($value) ) {
				array_push($validFiles, $value);
			}
		}

		return sizeof($validFiles);
	}
    */

}