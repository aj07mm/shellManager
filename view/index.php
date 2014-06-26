<section ng-controller="ScriptCtrl" class="section-container">
	<section class="section-child">
		<ol>
			<?php  foreach($foo->listAllScripts() as $value){ ?>
				<li ng-click="requestAjax('<?php echo $value; ?>')" ng-data class="script-tag">
					<?php echo $value; ?>
				</li>
			<?php }?>
		</ol>
	</section>
	<aside>
		<h2 class="filename-header">{{filename_header}}</h2>
		<form ng-submit="saveScript(data)">
			<textarea id="script-content" ng-model="data"></textarea>
			<input type="submit" class="button" value="ENVIAR">	
		</form>
	</aside>
</section>	
