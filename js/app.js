var app = angular.module('portfolio', ['ngRoute']);

app.config(function($routeProvider){
	$routeProvider
	.when('/',{
		controller: 'welcomeCtrl',
		templateUrl: 'js/templates/welcome.html'
	})
	.when('/portfolio',{
		controller: 'portfolioCtrl',
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
