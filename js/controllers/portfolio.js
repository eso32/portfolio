app.controller('portfolioCtrl', ['$scope', 'fetchData', function($scope, fetchData){
	$scope.hideLoader = "false";
	fetchData.success(function(data) {
    $scope.projects = data.projects;
  });
	$scope.$on('$routeChangeSuccess', function () {
  	$scope.hideLoader = "true";
	});
}]);
