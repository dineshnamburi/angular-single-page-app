var home = angular.module('home', []);
home.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('home', {
		url: '/',
		templateUrl: 'application/views/js/home/home.tpl',
		controller: 'HomeCtrl',
		resolve: { 
			getPage: function(HomeService){ 
				return HomeService.getPageData();

			}
		}
	});
}).controller('HomeCtrl',  function($rootScope, $scope, $state, HomeService, getPage) {
	console.log(getPage);
	
});