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
	<section ng-controller="ScriptCtrl" class="section-container">
		<section class="section-child">
			{{ avengers.name }}
			<ul>
				<?php  foreach($foo->listAllScripts() as $value){ ?>
					<li ng-click="requestAjax(this)"  class="script-tag"><?php echo $value; ?></li>
				<?php }?>
			</ul>
		</section>
		<aside>
			<div>
				<h2></h2>
			</div>
			<textarea ng-model="data" id="script-content"></textarea>
		</aside>
		</section>
	</section >
	<footer></footer>
</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
<script type="text/javascript" src="assets/js/app/main.js"></script>