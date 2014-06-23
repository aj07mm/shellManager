var myApp = angular.module('myApp',[]);

myApp.factory('Avengers', function(){
	var Avengers = {
		name: 123
	}

	return Avengers;
});

//como passar Avengers para dentro do controller ???
myApp.controller("ScriptCtrl",function($scope,$http){

		$scope.requestAjax = function(){
			console.log(1);
		};

		$http({
		    url: "http://localhost/shellManager/api.php",
		    method: "POST",
		    data: { filename:"asdasd.sh"}
		}).success(function(data, status, headers, config) {
		    $scope.data = data;
		}).error(function(data, status, headers, config) {
		    $scope.status = status;
		});
	}
);


//myApp


/*
document.addEventListener("DOMContentLoaded", function(){
	script_tags = document.getElementsByClassName('script-tag');	
	for(var i=0; i<=script_tags.length-1;i++ ){
		script_tags[i].addEventListener('click',function(){
			document.getElementById('script-content').innerHTML = 'foo';
		});
	}	
});*/