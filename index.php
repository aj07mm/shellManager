<?php
    require('model/Scripts.php');
	require('controller/MainController.php');
	require('controller/AppController.php');
	try {
		$model = new Scripts;
		$controller = new MainController;
		$app_controller = new AppController;
		} catch(Exception $e) {
			exit($e->getMessage());
		}
?>

<!DOCTYPE html>
<html ng-app="myApp">
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/css/app/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/app/main.css">
	</head>
	<body>
		<header></header>
		<div id="container_id"></div>
		<a href="https://github.com/aj07mm/shellmanager" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
		<?php 
			$app_controller->render('index',array(
				'model'=>$model
			));

            //TODO assumindo que getAllScripts() foi chamada
			$app_controller->render('footer', array('totalScripts' =>
                                                $model->getQuantityValidScripts()) );
		?>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-animate.min.js"></script>
	<script type="text/javascript" src="assets/js/filetree/jquery.js"></script>
	<script type="text/javascript" src="assets/js/app/main.js"></script>
</body>
</html>

