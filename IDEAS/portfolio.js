app.controller('portfolioCtrl', ['$scope', 'fetchData', function($scope, fetchData){
	fetchData.success(function(data) {
    $scope.projects = data.projects;
  });
	$scope.a = 2;
	$scope.pickedTech = [];
	$scope.filterTech = function(tech, $event){ //tech - technologia, $event - cieniowanie przycisku


		for(i=0;i<$scope.pickedTech.length;i++){ //sprawdzenie czy już został kilknięty
			if($scope.pickedTech[i] === tech){
				$scope.pickedTech.splice(i, 1);
				$($event.target).css('background-color',' #501b78');
				return;
			}
		}
		$($event.target).css('background-color','#260c3a');
		$scope.pickedTech.push(tech);
	};
	$scope.isInArray = function(arr){
		console.log($scope.a*2);
		return false;
	};
}]);
