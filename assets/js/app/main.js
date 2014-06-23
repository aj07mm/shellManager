var myApp = angular.module('myApp',[]);

myApp.factory('Avengers', function(){
	var Avengers = {
		name: 123
	}

	return Avengers;
})

myApp.controller("ScriptCtrl",function($scope,Avengers){
		$scope.avengers = Avengers;

		$scope.requestAjax = function(){
			console.log(1);
		}
	}
)

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