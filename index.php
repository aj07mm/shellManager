<link rel="stylesheet" type="text/css" href="assets\css\normalize.css">
<link rel="stylesheet" type="text/css" href="assets\css\foundation.min.css">
<link rel="stylesheet" type="text/css" href="assets\css\app\main.css">

<?php 
	//require('vendor/autoload.php');
	require('model/Scripts.php');
	require('controller/MainController.php');
	$foo = new Scripts;
	$controller = new MainController;
	//$controller->getScript();
?>

<html ng-app="myApp">
<head>
	<title></title>
</head>
<body>
	<header></header>
	<nav></nav>
	<section>
		<ul>
			<li class="script-tag"><?php echo $foo->listAllScripts()[0]; ?></li>
			<li class="script-tag"><?php echo $foo->listAllScripts()[1]; ?></li>
			<li class="script-tag"><?php echo $foo->listAllScripts()[2]; ?></li>
		</ul>
	</section>
	<aside>
		<div>
			<h2></h2>
		</div>
		<textarea id="script-content"></textarea>
	</aside>
	<footer></footer>
</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
<script type="text/javascript" src="assets/js/app/main.js"></script>