<!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cssConsole.css">
</head>
<body>
	<header></header>
	<nav></nav>
	<section ng-controller="ScriptCtrl" class="section-container">
		<section class="section-child">
			{{ avengers.name }}
			<ul>
				<?php  foreach($foo->listAllScripts() as $value){ ?>
					<li ng-click="requestAjax('<?php echo $value; ?>')" ng-data class="script-tag">
						<?php echo $value; ?>
					</li>
				<?php }?>
			</ul>
		</section>
		<aside>
			<div>
				<h2 class="filename-header">{{filename_header}}</h2>
			</div>
			
			<form action="api.php" method="POST">
				<textarea ng-model="data" id="script-content"></textarea>
				<input type="submit" value="ENVIAR">	
			</form>
		</aside>
		</section>
	</section >
	<footer></footer>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/cssConsole.min.js"></script>
	<script type="text/javascript" src="assets/js/app/main.js"></script>
</body>
</html>

