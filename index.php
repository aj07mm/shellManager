<!DOCTYPE html>
<?php 
	//require('vendor/autoload.php');
	require('model/Scripts.php');
	require('controller/MainController.php');
	$foo = new Scripts;
	$controller = new MainController;
?>

<html ng-app="myApp">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cssConsole.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cssConsoleCustom.css">
</head>
<body>
	<header></header>
	<nav></nav>
	<section ng-controller="ScriptCtrl" class="section-container">
		
		<section class="row">
			{{ avengers.name }}
			<ul class="large-6 small-6 columns">
				<?php  foreach($foo->listAllScripts() as $value){ ?>
					<li ng-click="requestAjax('<?php echo $value; ?>')" ng-data class="script-tag">
						<?php echo $value; ?>
					</li>
				<?php }?>
			</ul>
		</section>
		<br />
		<aside class="row">
			<div class="large-12 columns">
				<span id="fileHeader">{{filename_header}}</span>
				<form action="api.php" method="POST">
					<textarea id="script-content" ng-model="data"></textarea>
					<input type="submit" class="button small-3" value="ENVIAR">	
				</form>
			</div>
		</aside>

	</section>	
	<footer></footer>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/cssConsole.min.js"></script>
	<script type="text/javascript" src="assets/js/app/main.js"></script>
</body>
</html>

