<?php 
	require('model/Scripts.php');
	require('controller/MainController.php');
	require('controller/AppController.php');
	$foo = new Scripts;
	$controller = new MainController;
	$app_controller = new AppController;
?>

<!DOCTYPE html>
<html ng-app="myApp">
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/css/app/main.css">
	</head>
	<body>
		<header></header>
		<?php 
			$app_controller->render('index',array(
				'foo'=>$foo
			));
		?>
	<footer></footer>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
	<script type="text/javascript" src="assets/js/app/main.js"></script>
</body>
</html>

