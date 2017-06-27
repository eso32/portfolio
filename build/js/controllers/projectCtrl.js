app.controller('projectCtrl', ['$scope', '$routeParams', 'fetchData', function($scope, $routeParams, fetchData){
  fetchData.success(function(data) {
    $scope.project = data.projects[$routeParams.id];
  });
}]);
