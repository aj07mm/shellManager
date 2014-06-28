<?php
    require('model/Scripts.php');
	require('controller/MainController.php');
	require('controller/AppController.php');
	$model = new Scripts;
	$controller = new MainController;
	$app_controller = new AppController;
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

