var myApp = angular.module('myApp',[]);

myApp.factory('Avengers', function(){
	var Avengers = {
		name: 123
	}

	return Avengers;
});

myApp.directive("file", function(){
		return {
			restrict: "A",//attribute
			link: function(scope,element){
				element.bind('click', function(evt){
					this.style.color='green';
				});
			}
		}
})


//como passar Avengers para dentro do controller ???
myApp.controller("ScriptCtrl",function($scope,$http){

		$scope.requestAjax = function(filename){
			$scope.filename_header = filename;
			$http({
			    url: "http://localhost/shellManager/api.php",
			    method: "POST",
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

		$scope.saveScript = function(content){

			$http({
			    url: "http://localhost/shellManager/api.php",
			    method: "POST",
			    data: {
			    	action:'saveScript',
			    	filename: $scope.filename_header,
			    	content: content
			    }
			}).success(function(data, status, headers, config) {
			    data == 1 ? alert('script salvo com sucesso') : alert('ocorreu um erro ao salvar o script');
			}).error(function(data, status, headers, config) {
			    $scope.status = status;
			});
		};

		$scope.runScript = function(content){

			$http({
			    url: "http://localhost/shellManager/api.php",
			    method: "POST",
			    data: {
			    	action:'runScript',
			    	filename: $scope.filename_header,
			    	content: content
			    }
			}).success(function(data, status, headers, config) {
			    console.log(data);
			}).error(function(data, status, headers, config) {
			    $scope.status = status;
			});
		};

		
	}
);
