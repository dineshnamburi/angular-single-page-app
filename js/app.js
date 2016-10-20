var myApp = angular.module('myApp', ['ui.router', 'toastr', 'LocalStorageModule', 'ngSanitize', 'angular-loading-bar', 'ngFileUpload','home', 'login', 'about','mission','social','team', 'header', 'footer', 'client', 'training','trainingdetails', 'career', 'administrative', 'booking','personal','calendar', 'database', 'dataentry', 'event', 'mailing', 'project', 'research' ,'website', 'contact', 'checkout', 'profile']);
myApp.config(function($stateProvider, $urlRouterProvider, $httpProvider, $locationProvider) {
  $locationProvider.html5Mode(true);
  $urlRouterProvider.otherwise( '/' );
  $httpProvider.defaults.headers.post['Content-Type'] = 'application/json, text/plain, * / *';
});


myApp.directive('parseStyle', function($interpolate) {
    return function(scope, elem) {
        var exp = $interpolate(elem.html()),
            watchFunc = function () { return exp(scope); };

        scope.$watch(watchFunc, function (html) {
            elem.html(html);
        });
    };
});

