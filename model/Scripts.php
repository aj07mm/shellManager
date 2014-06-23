<?php

class Scripts{

	public function __construct(){}

	public function listAllScripts(){
		return scandir('shscripts');		
	}
}