var myApp = angular.module('myApp', ['ui.router', 'home']);
myApp.config(function($stateProvider, $urlRouterProvider, $httpProvider, $locationProvider) {
  $locationProvider.html5Mode(true);
  $urlRouterProvider.otherwise( '/home' );
  $httpProvider.defaults.headers.post['Content-Type'] = 'application/json, text/plain, * / *';
}).run();