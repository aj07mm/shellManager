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
			    //$scope.data = data;
			    console.log(data);
			}).error(function(data, status, headers, config) {
			   // $scope.status = status;
			});
		};

		
	}
);
