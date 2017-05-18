var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider){
	$routeProvider
	.when('/',{
		templateUrl: 'js/templates/welcome.html'
	})
	.when('/portfolio',{
		controller: 'myCtrl',
		templateUrl: 'js/templates/portfolio.html'
	})
	.when('/portfolio/project/:id',{
		controller: 'projectCtrl',
		templateUrl: 'js/templates/project.html'
	})
	.otherwise({
		redirectTo: '/'
	});
});

app.controller('projectCtrl', ['$scope','$http', function($scope, $http){

}]);
