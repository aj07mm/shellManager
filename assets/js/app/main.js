var myApp = angular.module('myApp', ['ngAnimate']);

//TODO depois separar em outro arquivo, para modularizar melhor a aplicação, separar servidor, porta etc, pegar tudo através de uma função seria o mais ideal "getUrlServer()". Um novo módulo ?
//Constants
myApp.constant('CONFIG', {APP_NAME: 'shellManager', APP_VERSION: '0.0.0', URL: 'http://localhost/shellManager/'});
myApp.constant('MESSAGES',  {SUCCESS_SCRIPT_SAVE: 'Script salvo com sucesso', FAIL_SCRIPT_SAVE: 'Ocorreu um erro ao salvar o script'});


myApp.factory('Avengers', function() {
	var Avengers = {
		name: 123
	}

	return Avengers;
});

myApp.directive("file", function() {
		return {
			restrict: "A",//attribute
			link: function(scope,element) {
				element.bind('click', function(evt) {
					this.style.color='green';
				});
			}
		}
})

//TODO como passar Avengers para dentro do controller ???
myApp.controller("ScriptCtrl", function($scope, $http, CONFIG, MESSAGES) {

        $scope.feedback = null;

		$scope.requestAjax = function(filename) {
			$scope.filename_header = filename;
			$http({
			    url: CONFIG.URL + 'api.php',
			    method: 'POST',
			    data: {
			    	action:'getScript',
			    	filename: filename
			    }
			}).success(function(data, status, headers, config) {
			    $scope.data = data;
			}).error(function(data, status, headers, config) {
			    $scope.status = status;
			});
		};

		$scope.createScript = function(filename,content){
			$scope.filename_header = prompt('Informe o nome do arquivo');
		}

		//if exists save else update
		$scope.saveScript = function(content) {

			$http({
			    url: CONFIG.URL + 'api.php',
			    method: 'POST',
			    data: {
			    	action:'saveScript',
			    	filename: $scope.filename_header,
			    	content: content
			    }
			}).success(function(data, status, headers, config) {
                if(data == 1) {
                    $scope.feedback = {msg: MESSAGES.SUCCESS_SCRIPT_SAVE, class: 'success'};
                    location.reload();
                } else {
                    $scope.feedback = {msg: MESSAGES.FAIL_SCRIPT_SAVE, class: 'fail'};
                }
			}).error(function(data, status, headers, config) {
			    $scope.status = status;
			});
		};

		$scope.runScript = function(content) {

			$http({
                url: CONFIG.URL + 'api.php',
                method: 'POST',
			    data: {
			    	action:'runScript',
			    	filename: $scope.filename_header,
			    	content: content
			    }
			}).success(function(data, status, headers, config) {
			    $scope.output = data
			}).error(function(data, status, headers, config) {
			    $scope.status = status;
			});
		};

		
	}
);
