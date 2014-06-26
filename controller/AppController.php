<?php
	class AppController{

		const VIEW_PATH = 'view';

		public function __construct(){}

		public function render($viewname,$params){
			$foo = $params['foo'];

			require(self::VIEW_PATH.'/'.$viewname.'.php');

		}

	}