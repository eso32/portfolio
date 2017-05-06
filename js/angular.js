var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider){
	$routeProvider
	.when('/',{
		templateUrl: 'js/templates/welcome.html'
	})
	.when('/portfolio',{
		templateUrl: 'js/templates/portfolio.html'
	})
	.otherwise({
		redirectTo: '/'
	});
});

app.controller('myCtrl', ['$scope', function($scope){
	$scope.myLanguage = 'None';
	$scope.cpp = function(){
		$scope.myLanguage="cpp";
	}

}]);
