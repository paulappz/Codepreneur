angular.module('WakaOndo', ['ngRoute',])

.config(function($routeProvider) {
  $routeProvider.when('/', {
      controller:'IndexController as index',
      templateUrl:'templates/slide.html',
    })
    .otherwise({
      redirectTo:'/'
    });
})

.controller('IndexController', function() {
  console.log('bdskdsx');
});
