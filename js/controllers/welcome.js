app.controller('welcomeCtrl',['$scope', function($scope){
  $scope.followMe = function($event){
    var x = $event.x;
    var y = $event.y;
    var w = window.innerWidth;
    var leftDiv = document.getElementById('leftD');
    var rightDiv = document.getElementById('rightD');
    rightDiv.style.width = (1-x/w)*100 +"%";
    leftDiv.style.width = x/w*100 +"%";
  }
}]);
