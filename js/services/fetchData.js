app.factory('fetchData', ['$http', function($http) {
  return $http.get('database.json')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);
 
