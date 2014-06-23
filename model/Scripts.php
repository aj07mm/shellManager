<?php

class Scripts{

	public function __construct(){}

	public function listAllScripts(){
		return array_slice(scandir('shscripts'),2);		
	}
}