var myApp = angular.module('myApp',[]);

myApp.factory('Avengers', function(){
	var Avengers = {
		name: 123
	}

	return Avengers;
});

//como passar Avengers para dentro do controller ???
myApp.controller("ScriptCtrl",function($scope,$http){

		$scope.requestAjax = function(obj){
			console.log(obj);

			$http({
			    url: "http://localhost/shellManager/api.php",
			    method: "POST",
			    data: {filename:"asdasd.sh"},
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			}).success(function(data, status, headers, config) {
			    $scope.data = data;
			}).error(function(data, status, headers, config) {
			    $scope.status = status;
			});
		};

		
	}
);
