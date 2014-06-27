<?php
	class AppController{

		const VIEW_PATH = 'view';

		public function __construct(){}

		public function render($viewname,$params){

			foreach($params as $key => $value){
				$$key = $value;	
			}

			require(self::VIEW_PATH.'/'.$viewname.'.php');

		}

	}