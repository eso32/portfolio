app.controller('portfolioCtrl', ['$scope', 'fetchData', function($scope, fetchData){
	fetchData.success(function(data) {
    $scope.projects = data.projects;
  });
	$scope.pickedTech = [];
	$scope.filterTech = function(tech, $event){
		for(i=0;i<$scope.pickedTech.length;i++){
			if($scope.pickedTech[i] === tech){
				$scope.pickedTech.splice(i, 1);
				$($event.target).css('background-color',' #501b78');
				return;
			}
		}
		$($event.target).css('background-color','#260c3a');
		$scope.pickedTech.push(tech);
	}
}]);
