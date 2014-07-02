<?php   
	/* $model Scripts */
?>
<section ng-controller="ScriptCtrl" class="section-container">
	<section class="section-child">
		<ol>
			<?php  foreach($model->listAllScripts() as $value){ ?>
				<li ng-click="requestAjax('<?php echo $value; ?>')" file ng-data class="script-tag">
					<?php echo $value; ?>
				</li>
			<?php }?>
		</ol>
	</section>
	<aside>
		<h2>{{filename_header || "Select a script" }}</h2>
		<textarea id="script-content" class="script-interface" ng-model="data"></textarea>
		<div id="input-tab">
			<a ng-click="createScript(data)" href="javascript:void(0)">Criar novo script</a>
			<input ng-click="saveScript(data)" type="button" class="button" value="Save">
			<input ng-click="runScript(data)" type="button" class="button" value="Run">
		</div>
		<br />
        <section id="feedback"  ng-show="feedback" ng-class="feedback.class">
            {{ feedback.msg }}
        </section>
	</aside>
	<section class="section-output">
		<h2>Resposta</h2>
		<textarea id="script-output" class="script-interface" ng-model="output"></textarea>
	</section>
	
</section>	
