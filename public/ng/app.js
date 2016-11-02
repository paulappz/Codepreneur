angular.module('WakaOndo', ['ngRoute',])

.config(function($routeProvider, $interpolateProvider) {
  $interpolateProvider.startSymbol('[[');
  $interpolateProvider.endSymbol(']]');
  
  $routeProvider.when('/', {
      controller:'IndexController as index',
      templateUrl:'/ng/templates/slide.html',
    })
    .when('/login', {
      controller:'LoginController as login',
      templateUrl:'/ng/templates/login.html',
    })
    .when('/signup', {
      controller:'SignupController as signup',
      templateUrl:'/ng/templates/signup.html',
    })
    .otherwise({
      redirectTo:'/'
    });
})

.controller('IndexController', function() {

})
.controller('LoginController', function() {

})
.controller('SignupController', function() {})
.controller('NavigationController', ['$scope', '$location', function($scope, $location) {
  $scope.items = [
    {path: '/', title: 'Home'},
    {path: '/about', title: 'About'},
    {path: '/contact', title: 'Contact'},
    {path: '/login', title: 'Login'},
    {path: '/signup', title: 'Signup'},
  ];
  $scope.isActive = function(item) {
    if (item.path == $location.path()) {
      return true;
    }
    return false;
  }
}]);