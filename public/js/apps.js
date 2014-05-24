var myApp = angular.module('myApp', [], function($interpolateProvider) {
    //interpolateProvider to prevent conflict phalcon curly braces (volt syntax)
    $interpolateProvider.startSymbol('[['); 
    $interpolateProvider.endSymbol(']]'); 
  },
  []
);

var controllers = {}; // declare controller arrays

controllers.firstcontroller = function($scope, $http) {


  /*
  * 
  *
  *
  */
  $scope.showData = function(){

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

//create new filter
angular.module('myApp').filter('pagination', function()
{
 return function(input, start)
 {
  start = +start;
  return input.slice(start);
 };
});