<?php   
	/* $model Scripts */
?>
<section ng-controller="ScriptCtrl" class="section-container">
	<section class="section-child">
		<ol>
			<?php  foreach($model->listAllScripts() as $value){ ?>
				<li ng-click="requestAjax('<?php echo $value; ?>')" ng-data class="script-tag">
					<?php echo $value; ?>
				</li>
			<?php }?>
		</ol>
	</section>
	<aside>
		<h2 class="filename-header">{{filename_header}}</h2>
		<textarea id="script-content" ng-model="data"></textarea>
		<div style="padding-right:22px;">
			<input ng-click="saveScript(data)" type="submit" class="button" value="Save">	
			<input ng-click="runScript(data)" type="submit" class="button" value="Run">	
		</div>
		
	</aside>
</section>	
