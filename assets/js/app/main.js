var myApp = angular.module('myApp',[]);

myApp.factory('Avengers', function(){
	var Avengers = {
		name: 123
	}

	return Avengers;
});

//como passar Avengers para dentro do controller ???
myApp.controller("ScriptCtrl",function($scope,$http){

		$scope.requestAjax = function(filename){
			$scope.filename_header = filename;
			$http({
			    url: "http://localhost/shellManager/api.php",
			    method: "POST",
			    data: {
			    	filename: filename
			    }
			}).success(function(data, status, headers, config) {
			    $scope.data = data;
			}).error(function(data, status, headers, config) {
			    $scope.status = status;
			});
		};

		
	}
);

$('textarea').cssConsole();