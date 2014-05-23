var myApp = angular.module('myApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]'); 
  },
  []
);

var controllers = {};

controllers.firstcontroller = function($scope, $http) {

  $scope.showData = function( ){

    $scope.curPage = 0;
    $scope.pageSize = 10;
    $http.get('index/getJson').success(function(data) {
    $scope.films = data;
    });

    $scope.numberOfPages = function() {
      return Math.ceil($scope.films.length / $scope.pageSize);
    };
  }
    
}

myApp.controller(controllers);

angular.module('myApp').filter('pagination', function()
{
 return function(input, start)
 {
  start = +start;
  return input.slice(start);
 };
});