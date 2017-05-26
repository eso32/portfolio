app.controller('portfolioCtrl', ['$scope', 'fetchData', function($scope, fetchData){
	fetchData.success(function(data) {
    $scope.projects = data.projects;
  });
}]);
